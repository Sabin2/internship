<?php 
  if ( ! isAdmin() ){
      header( 'location:?action=login' );
    
  }
?>
<div class="row m-4">
  <h3>User Listing</h3>
</div>
  <div class="row m-5">
    <table class="table">
      <thead class="bg-dark text-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
         <?php 
            $result = $user-> get( $page );
            foreach( $result as $row ){
          ?>
        <tr>
          <td><?php echo  ++$i;?></td>
          <td><?php echo $row[ 'Username' ]; ?></td>
          <td><?php echo $row[ 'Lastname' ]; ?></td>
          <td><?php echo $row[ 'Email' ]; ?></td>
          <td>

            <a href="?id=<?php echo $row[ 'id' ]; ?>&&action=edit_user" >
              <i class="fa fa-pen-to-square" style="color: green"></i></a> || 
            <a href="?action=users&&delid=<?php echo $row[ 'id' ]; ?>">
              <i class="fa fa-trash" style="color: red" ></i>
            </a>
          </td>
        </tr>
      <?php } 
        echo "Showing: ". $i . " of ". $rows;
      ?>
      </tbody>
    </table>

      <nav >
        <ul class="pagination ">
          <?php for( $page = 1; $page <= $total_pages; $page++ ) {  ?>
            <li class="page-item"><a class="page-link" href="?action=users&&page=<?php echo $page ?>"><?php echo $page ?></a></li>
          <?php } 
          ?>
        </ul>
      </nav>
  </div>


  

