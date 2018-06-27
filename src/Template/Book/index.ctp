<div class="container">
    <div class="panel panel-primary" style="margin-top:2%;">
      <div class="panel-heading">book Lists
      <?=$this->Html->link("Add new",
      "/book/create/",
      [
        "class"=>"btn btn-info btn-sm",
        "style" =>"background-color: #228B22 !important; float:right; bottom:10px;"
        ]
    );?>
    <?=$this->Html->link("Logout",
    "/usersTable/logout/",
    [
      "class"=>"btn btn-info btn-sm",
      "style" =>"background-color: #228B22 !important; float:right; bottom:10px;"
      ]
  );?>
  <?=$this->Html->link("Users",
   ['controller'=>'usersTable','action'=>'index'],
   [
     "class"=>"btn btn-info btn-sm",
     "style" =>"background-color: #228B22 !important; float:right; bottom:10px;"
     ]
 );?>
    </div>
      <div class="panel-body">
        <table class="table table-striped">

            <!--Table head-->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>book/s Name</th>
                    <th>Published</th>
                    <th>Price</th>
                    <th>ISBN</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <!--Table head-->
              <?php echo($books);?>

           <?php foreach ($books as $book) { ?>        <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row"><?= $book->id;?></th>
                    <td><?= $book->book_name;?></td>
                    <td><?= $book->book_name;?></td>
                    <td><?= $book->published_date;?></td>
                    <td><?= $book->price;?></td>
                    <td><?= $book->isbn; ?></td>
                    <td><?= $book->genre; ?></td>
                    <td>
                      <?=$this->Html->link("Edit",
                      "/book/edit/".$book->id,
                      [
                        "class"=>"btn btn-primary btn-xs"
                      ]
                    );?>
                    <?=$this->Html->link("Delete",
                    "/book/delete/".$book->id,
                    [
                      "class"=>"btn btn-danger btn-xs"
                    ]
                  ); }?>

                    </td>
                </tr>

            </tbody>
            <!--Table body-->

        </table>
      </div>

    </div>
</div>
<!--Table-->
