<?php

namespace app\controllers;

use Yii;
use app\models\Perfil;
use app\models\Menu;
use app\models\PerfilMenu;
use app\models\PerfilMenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerfilMenuController implements the CRUD actions for PerfilMenu model.
 */
class PerfilMenuController extends Controller
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
     * Lists all PerfilMenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerfilMenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerfilMenu model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idMenu, $idPerfil)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PerfilMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PerfilMenu();

        $msg="";
        $model->idEmpresa = 0;

        if ($model->load(Yii::$app->request->post())) {
            if($model->validate()) {
                $model->save();
                return $this->redirect(['index']);
            } else {
                $msg = implode($model->getFirstErrors());
            }
        }

        return $this->render('create', [
            'model' => $model,
            'mensaje' => $msg,
        ]);
    }

    /**
     * Updates an existing PerfilMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idMenu, $idPerfil)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerfilMenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idMenu, $idPerfil)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerfilMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PerfilMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idMenu, $idPerfil)
    {
        if (($model = PerfilMenu::findOne($idMenu, $idPerfil)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
