<?php

class HomeController extends RenderView
{
    public function index()
    {
        $homeModel = new HomeModel();
        try {
            $users = $homeModel->getUsers();

            usort($users, function($first, $second) {
                return strcmp($first['firstName'], $second['firstName']);
            });
            
            $groupedUsers = [];
            foreach ($users as $user) {
                $state = $user['address']['state'];
                $groupedUsers[$state][] = $user;
            }
    
            $this->render('home', ['groupedUsers' => $groupedUsers]);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            $this->render('error', ['errorMessage' => $errorMessage]);
        }
        
    }
}