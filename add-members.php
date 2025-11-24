<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="containr text-center pt-3">
        <h1>Add New Member✝</h1>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="container pt-5"></div>
             <div class="container pt-5"></div>
            <form>
                <div class="card pt-3 pb-3 px-3">
                    <div class="card-body text-center"></div>
  <div class="mb-3">
    <label for="exampleInputFirst" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputfirst" aria-describedby="firstHelp">
    
  </div>
   <div class="mb-3">
    <label for="exampleInputLast" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputLast" aria-describedby="lastHelp">
    
  </div>
   <div class="mb-3">
    <label for="exampleInputPhoneNo" class="form-label">Phone No</label>
    <input type="text" class="form-control" id="exampleInputPhoneNo" aria-describedby="phoneHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputgender" class="form-label">Gender</label>
    
    <select class="form-select" name="gender" id="gender" placeholder="gender">
        <option value="">-- Select Gender --</option>
        <option value="gender">Male</option>
        <option value="gender">Female</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputposition" class="form-label">Position</label>
    <select class="form-select" name="position" id="position" placeholder="position">
        <option value="">-- Select Position --</option>
        <option value="position">pastor</option>
        <option value="position">chairman</option>
        <option value="position">worshipper</option>
        <option value="position">choir</option>
        <option value="position">youth</option>
        <option value="position">sunday school</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
        </div>
        <div class="col-3"></div>

    </div>
</body>
</html>