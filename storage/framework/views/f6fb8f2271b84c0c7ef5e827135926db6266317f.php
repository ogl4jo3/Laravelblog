

<?php $__env->startSection('title','| Edit Blog Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

	<?php echo Html::style('css/parsley.css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<?php echo Form::model($post,[ 'route' => ['posts.update', $post->id ] ,  
		'data-parsley-validate' => '' , 'method' => 'PUT' ]); ?>

		<div class="col-md-8">
			<?php echo e(Form::label('title','Title:')); ?>

			<?php echo e(Form::text('title',null,['class'=>'form-control input-lg', 'required' => '' , 'maxlength' => '255' ])); ?>



    		<?php echo e(Form::label('slug','Slug:',['class'=>'form-spacing-top'])); ?>

    		<?php echo e(Form::text('slug',null,['class'=>'form-control ', 'required' => '', 'minlength'=>'5' , 'maxlength' => '255'  ])); ?>


			<?php echo e(Form::label('body','Body:',['class'=>'form-spacing-top'])); ?>

			<?php echo e(Form::textarea('body',null,['class'=>'form-control', 'required' => ''])); ?>

		</div>
		
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
	  				<dt>Create At:</dt>
	  				<dd><?php echo e(date('M j, Y h:ia',strtotime($post->created_at))); ?></dd>
				</dl>

				<dl class="dl-horizontal">
	  				<dt>Last Updated:</dt>
	  				<dd><?php echo e(date('M j, Y h:ia',strtotime($post->updated_at))); ?></dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<?php echo Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block')); ?>

					</div>
					<div class="col-md-6">
						<?php echo e(Form::submit('Save Changes',['class'=>'btn btn-success btn-block'])); ?>

					</div>
				</div>
			</div>
		</div>
		<?php echo Form::close(); ?>

	</div><!--end of raw-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<?php echo Html::script('js/parsley.min.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>