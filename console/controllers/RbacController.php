<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // add "updateCompany" permission
        $readCompany = $auth->createPermission('readCompany');
        $readCompany->description = 'Посмотреть данные о компании';
        $auth->add($readCompany);

        // add "createCompany" permission
        $createCompany = $auth->createPermission('createCompany');
        $createCompany->description = 'Создать компанию';
        $auth->add($createCompany);

        // add "updateCompany" permission
        $updateCompany = $auth->createPermission('updateCompany');
        $updateCompany->description = 'Редакировать данные о компании';
        $auth->add($updateCompany);

        // add "updateCompany" permission
        $deleteCompany = $auth->createPermission('deleteCompany');
        $deleteCompany->description = 'Удалить компаниию';
        $auth->add($deleteCompany);

        // add "author" role and give this role the "createCompany" permission
        $reader = $auth->createRole('reader');
        $auth->add($reader);
        $auth->addChild($reader, $readCompany);

        // add "author" role and give this role the "createCompany" permission
        $companyOwner = $auth->createRole('companyOwner');
        $auth->add($companyOwner);
        $auth->addChild($companyOwner, $createCompany);
        $auth->addChild($companyOwner, $reader);

        // add "admin" role and give this role the "updateCompany" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updateCompany);
        $auth->addChild($admin, $companyOwner);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($reader,3);
        $auth->assign($companyOwner, 2);
        $auth->assign($admin, 1);
    }
}