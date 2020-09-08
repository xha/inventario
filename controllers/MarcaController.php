<?php

namespace app\controllers;

use Yii;
use app\models\Marca;
use app\models\MarcaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MarcaController implements the CRUD actions for Marca model.
 */
class MarcaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Marca models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MarcaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Marca model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Marca model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Marca();
        $msg="";
        $connection = \Yii::$app->db;

        if ($model->load(Yii::$app->request->post())) {
            $model->idEmpresa=0;
            $model->estado=1;
            if ($model->validate()) {
                $transaction = $connection->beginTransaction();

                try {
                    $model->save();
                    $transaction->commit();
                    return $this->redirect(['index']);
                } catch (\Throwable $mensaje) {
                    $transaction->rollBack();
                    $msg = $mensaje;
                }
            } else {
                //$msg = $model->getErrors();
                $msg = "Error al guardar el registro";
            }
        }

        return $this->render('create', [
            'model' => $model,
            'mensaje' => $msg,
        ]);
    }

    /**
     * Updates an existing Marca model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $msg="";

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->estado=1;
                $model->save();
                return $this->redirect(['index']);
            } else {
                $msg = "Error al guardar el registro";
            }
        }

        return $this->render('update', [
            'model' => $model,
            'mensaje' => $msg,
        ]);
    }

    /**
     * Deletes an existing Marca model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        //$this->findModel($id)->delete();
        $model = $this->findModel($id);
        $model->activo=0;
        $model->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Marca model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Marca the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Marca::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
