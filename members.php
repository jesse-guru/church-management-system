<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div>
    <div class="container pt-3">
        <a href="index.html" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Back</a>
    </div>
    <div class="container text-center">
    <h1 class="card-title m-b-0">Church members</h1>
    </div>
   
   
     <div class="row">
        <div class="col-1"></div>
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body text-center">
                                
    <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Phone No </th>
      <th scope="col">Gender</th>
      <th scope="col">Position</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>0712354578</td>
      <td><select class="form-select" aria-label="Disabled select example">
        <option value="male">male</option>
        <option value="female">female</option>
      </select></td>
      <td>
        <select class="form-select" aria-label="Disabled select example">
            <option value="member">member</option>
            <option value="admin">admin</option>
          </select>
      </td>
        <td>
        <button type="button" class="btn btn-primary">edit</button>
            <button type="button" class="btn btn-danger">delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
       <td>0776835358</td>
       <td><select class="form-select" aria-label="Disabled select example" >
        <option value="male">male</option>
        <option value="female">female</option>
      </select></td>
      <td>
        <select class="form-select" aria-label="Disabled select example">
            <option value="member">member</option>
            <option value="admin">admin</option>
          </select>
      </td>
        <td>
        <button type="button" class="btn btn-primary">edit</button>
            <button type="button" class="btn btn-danger">delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>bird</td>
       <td>07549787278</td>
       <td><select class="form-select" aria-label="Disabled select example">
        <option value="male">male</option>
        <option value="female">female</option>
      </select></td>
      <td>
        <select class="form-select" aria-label="Disabled select example">
            <option value="member">member</option>
            <option value="admin">admin</option>
          </select>
      </td>
        <td>
        <button type="button" class="btn btn-primary">edit</button>
            <button type="button" class="btn btn-danger">delete</button></td>
    </tr>
  </tbody>
  </div>
                        </div>
                        </div>
                        <div class="col-1">
                    </div>
                </div>

                   </div> 
</table>
    </div>
    </div>  
 <div class="row">
        <div class="col-9"></div>
        <div class="col-3">
        <a href="add-members.html" class="btn btn-primary">Add new members</a>
        </div>
      
    </div>
</body>
</html>