<?php

namespace App\Controller;

use App\Controller;

class UsersController extends AppController{

    public function index(){

        $this->paginate = [
            'limit' => 2,
            'order' => [
                "Users.id" => 'asc',
            ]
        ];

        $usuarios = $this->paginate($this->Users);

        // enviar dados para a view
        //$usuario = "Cesar";
        //$this->set(['usuario' => $usuario]);


        // buscar da tabela usuarios via Model
        //$usuarios = $this->Users->find()->all();

        //$this->set(['usuarios' => $usuarios]);
        //ou
        $this->set(compact('usuarios'));

    }

    public function view($id = null){

        $usuario = $this->Users->get($id);

        $this->set(['usuario' => $usuario]);

    }

    public function add(){

        $user = $this->Users->newEntity();

        if($this->request->is('post')){

            //validar os dados
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if($this->Users->save($user)){
                $this->Flash->success(__('Usuário cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->success(__('Erro ao cadastrar usuário'));
            }
            
        }

        $this->set(compact('user'));
    }

    public function edit($id = null){
        
        $user = $this->Users->get($id);

        if($this->request->is(['post', 'put'])){

            $user = $this->Users->patchEntity($user, $this->request->getData());

            if($this->Users->save($user)){
                $this->Flash->success('Usuário editado com sucesso.');
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error('Usuário não foi salvo.');
            }
        }

        // Enviar os dados para a view
        $this->set(compact('user'));
    }

    public function delete($id = null){

        // Aceitar somentes os metodos post e delete
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);

        if($this->Users->delete($user)){

            $this->Flash->success(('usuario excluido com sucesso.'));
        }else{
            $this->Flash->success(('Erro ao excluir usuário.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}