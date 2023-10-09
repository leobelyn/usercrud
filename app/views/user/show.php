<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Lvalust CRUD</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lavalust CRUd</h5>
                            <table class="table table-striped">
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Usertype</th>
                                </tr>
                            </table>
                            <?php if(!empty(validation_errors())) echo validation_errors() ?>
                            <?php echo $this->session->flashdata('status'); ?>
                            <form action="<?=site_url('user/show_data');" method="post">
                               <label>Username</label>
                               <input type="text" name="username" class="form-control" required>
                               <label>Passowrd</label>
                               <input type="text" name="password" class="form-control" required>
                               <label>Email</label>
                               <input type="text" name="email" class="form-control" required>
                               <label>Usertype</label>
                               <select name="usertype" class="form-control">
                               <option value="admin">ADMIN</option>
                               <option value="admin">USER</option>
                               </select>
                               <button type="submit" class="btn btn-primary mt-2">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1>Lavalust Crud</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>