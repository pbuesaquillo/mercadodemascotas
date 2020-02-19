<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Test'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tests view content">
            <h3><?= h($test->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($test->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($test->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($test->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($test->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($test->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($test->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($test->users as $users) : ?>
                        <tr>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->first_name) ?></td>
                            <td><?= h($users->last_name) ?></td>
                            <td><?= h($users->role) ?></td>
                            <td><?= h($users->active) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->username]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->username]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->username], ['confirm' => __('Are you sure you want to delete # {0}?', $users->username)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
