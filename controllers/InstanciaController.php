<?php

namespace app\controllers;

use Yii;
use app\models\Instancia;
use app\models\InstanciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * InstanciaController implements the CRUD actions for Instancia model.
 */
class InstanciaController extends Controller
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
     * Lists all Instancia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InstanciaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Instancia model.
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
     * Creates a new Instancia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Instancia();
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
     * Updates an existing Instancia model.
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
            if($model->validate()) {
                $model->save();
                return $this->redirect(['index']);
            } else {
                $msg = implode($model->getFirstErrors());
            }
        }

        return $this->render('update', [
            'model' => $model,
            'mensaje' => $msg,
        ]);
    }

    /**
     * Deletes an existing Instancia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Instancia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Instancia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Instancia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionBuscaCambiaNombre($array, $newkey, $oldkey) {
       foreach ($array as $key => $value) {
          if (is_array($value))
             $array[$key] = $this->actionBuscaCambiaNombre($value,$newkey,$oldkey);
          else
            {
                 $array[$newkey] =  $array[$oldkey];    
            }
        }

       unset($array[$oldkey]);          
       return $array;   
    }

    public function actionBuildTree(array $elements, $parentId = 0) {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['idPadre'] == $parentId) {
                $children = $this->actionBuildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }

    public function actionBuscaArbol($parent = 0, $esServicio = false) {
        if ($esServicio=="true") $esServicio=1;
        $datos = Instancia::find()->where(["idEmpresa" => 0, "esServicio" => $esServicio, "activo" => 1])->asArray()->all();

        $nuevos = $this->actionBuscaCambiaNombre($datos,"id","idInstancia");
        $nuevos = $this->actionBuscaCambiaNombre($nuevos,"text","descripcion");

        $valor = $this->actionBuildTree($nuevos);
        return Json::encode($valor);
   }
}
