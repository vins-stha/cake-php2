<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Books
 */
?>
<div class="container">
    <div class="panel panel-primary" style="margin-top:2%;">
      <div class="panel-heading" style="padding:2%;">
        <?= $this->Flash->render() ?>
      <?=$this->Html->link("View Books",
      "/book/index/",
      [
        "class"=>"btn btn-info btn-sm",
        "style" =>"background-color: #228B22 !important; float:right;"
        ]
    );?>
    <?=$this->Html->link("Logout",
    "/usersTable/logout/",
    [
      "class"=>"btn btn-info btn-sm",
      "style" =>"background-color: #228B22 !important; float:right; bottom:10px;"
      ]
  );?>
    </div>
      <div class="row main">
  				<div class="main-login main-center">
  				<h3>Please enter the details </h3>
          <h1><!--// echo "you are here ---". $this->request->here;?--></h1>

            <?= $this->Form->create('book',array('controller'=>'book','action'=>'create'));?>
  						<div class="form-group">
  							<label for="name" class="cols-sm-2 control-label"> Name of Book</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  									<!--input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>-->
                    <?= $this->Form->control('book_name',array('label'=>'','class'=>'form-control','placeholder'=>'Enter your book name ')); ?>
                  </div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="email" class="cols-sm-2 control-label">Name of Author</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
    								 <?= $this->Form->control('author_name',array('label' =>'','class'=>'form-control', 'placeholder'=>'Name of the author/s'));?>
  								</div>
  							</div>
  						</div>

    		<div class="form-group">
  							<label for="username" class="cols-sm-2 control-label">Published Date</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
  								      <?= $this->Form->control('published_date',array('label'=>'', 'class'=>'form-control','placeholder'=>'published date'));?>
  								</div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="password" class="cols-sm-2 control-label">Price (USD)</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
  									 <?= $this->Form->control('price', array('label'=>'', 'class'=>'form-control', 'placeholder'=>'Price in USD')) ?>
  								</div>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="confirm" class="cols-sm-2 control-label">Description</label>
  							<div class="cols-sm-10">
  								<div class="input-group">
  									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
    									<?= $this->Form->control('genre',array('label'=>'','class'=>'form-control','placeholder'=>'Enter  Genre of the book')) ?>
  								</div>
  							</div>
  						</div>
              <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">ISBN</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                      <?= $this->Form->control('isbn',array('label'=>'','class'=>'form-control','placeholder'=>'Enter  the ISBN of the book')) ?>
                  </div>
                </div>
              </div>

  						<div class="form-group ">
                <?php echo $this->Form->submit('Submit',['class'=>'btn btn-primary btn-lg btn-block login-button']);?>
              </div>
              <?=$this->Form->end();?>
  					</form>
  				</div>
  			</div>

      </div>


</div>
<!--Table-->
