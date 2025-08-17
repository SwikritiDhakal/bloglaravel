<div?>
<h2>Add New User</h2>

<form action="adduser" method="post">
    @csrf
<div class="input-wrapper">
    UserName: <input type="text" class="text" name="username">
 </div>
 <br>
<div class="input-wrapper">
    Email: <input type="email" class="text" name="email">
 </div>
 <br>
<div class="input-wrapper">
    Address: <input type="text" class="text" name="address">
 </div>
 <br>
<div class="input-wrapper">
   <button type="submit">Login </button>
 </div>


</form>
</div>


<style>
    body {
  font-family: Arial, sans-serif;
  background: #f4f4f9;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form-container {
  background: #fff;
  padding: 20px 30px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  width: 350px;

}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.input-wrapper {
  margin-bottom: 15px;
  display: flex;
  flex-direction: column;
}

.input-wrapper label {
  font-weight: bold;
  margin-bottom: 5px;
  color: #555;
}

.input-wrapper input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 14px;
}

button {
  width: 100%;
  padding: 10px;
  background: #4CAF50;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background: #45a049;
}

</style>