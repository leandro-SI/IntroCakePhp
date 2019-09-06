<div class="users index large-12 medium-12 columns content">
    <h3><?php echo 'Lista de Usuários'; ?></h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->name; ?></td>
                <td><?php echo $usuario->email ?></td>
                <td>
                    <?php 
                        echo $this->Html->link(('Ver'), ['action' => 'view', $usuario->id]);
                    ?>
                    <?php 
                        echo $this->Html->link(('Editar'), ['action' => 'edit', $usuario->id]);
                    ?> 
                    <?php 
                        echo $this->Form->postLink(('Apagar'), ['action' => 'delete', $usuario->id], ['confirm' => 'realmente quer apagar usuario?', $usuario->id]);
                    ?>    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Html->link(('Cadastrar Usuário'), ['action' => 'add']); ?>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->paginator->first('<< ' . __('Primeira')); ?>
            <?php echo $this->paginator->prev('< ' . __('Anterior')); ?>
            <?php echo $this->paginator->numbers(); ?>
            <?php echo $this->paginator->next('> ' . __('Próxima')); ?>
            <?php echo $this->paginator->last('>> ' . __('Última')); ?>
        </ul>
        <p>
            <?php echo $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrado {{current}} registro(s) do total de {{count}}')]); ?>
        </p>
    </div>
</div>
