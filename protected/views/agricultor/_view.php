<?php 
/* @var $this AgricultorController */
/* @var $data Agricultor */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Agricultor <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
]</small></h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-8 b-r">
                                <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                                'data' => $model,
                                'htmlOptions' => array('class' => 'table table-striped responsive-table table-bordered'),
                                'attributes' => array(
                                                                    'id',
                                                                    'rut',
                                                                    'razonSocial',
                                                                    'direccion',
                                                                    array(
                'name'=>'email',
                'type'=>'email'
            ),
                                                                    'telefono',
                                                                    array(
                'name'=>'propiedad1',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad2',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad3',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad4',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad5',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad6',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad7',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad8',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad9',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad10',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad11',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad12',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad13',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad14',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad15',
                'type'=>'boolean'
            ),
                                                                    array(
                'name'=>'propiedad16',
                'type'=>'boolean'
            ),
                                                                                                                                                                                                                                                                                                                            ),
                                )); ?>
                        </div>
                        <div class="col-sm-4">
                                <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                                'data' => $model,
                                'htmlOptions' => array('class' => 'table table-striped responsive-table table-bordered'),
                                'attributes' => array(
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        'status',
                                                                        'used_by',
                                                                        'check_in',
                                                                        'created_by',
                                                                        'created',
                                                                        'modified_by',
                                                                        'modified',
                                                                ),
                                )); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>