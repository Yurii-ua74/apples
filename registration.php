
<div class="card home">    
    <div class="inside border-r card">  
    <h2 class="h1-white text-align">РЕЄСТРАЦІЯ</h2>
<form method="post" action="do_register">
  <div class="mb-3 p1">
    <input type="text" class="form-control" id="usname" name="usname" placeholder="Введіть ім'я" required>
  </div>
  <div class="mb-3 p1">
    <input type="text" class="form-control" id="ussurname" name="ussurname" placeholder="Введіть прізвище" required>
  </div>
  <div class="mb-3 p1">
    <input type="text" class="form-control" id="usphone" name="usphone" placeholder="Введіть номер телефону" required>
  </div>
  <div class="mb-3 p1">
    <input type="email" class="form-control" id="usemail" name="usemail" placeholder="Введіть E-mail" required>
  </div>
  <div class="mb-3 p1">
    <input type="password" class="form-control" id="password" name="password" placeholder="Введіть password" 
    minlength="4" maxlength="8" pattern="^[a-zA-Z0-9]{4,8}$" required> 
  </div>
  <button type="submit" class="btn btn-primary mt-2 bgc-yellow">Зареєструвати</button> 
</form>
</div>
</div>
