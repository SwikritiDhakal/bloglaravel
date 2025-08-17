<div class="form-container">
  <h1>Form</h1>

    <!-- {{print_r($errors)}} -->

    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
    @endforeach
    @endif -->

  <form action="addUserController" method="post" class="grid-form">
    @csrf

    <div>
      <label for="username">UserName:</label>
      <input type="text" class="text" name="username" id="username">
      <span>@error('username'){{$message}}@enderror</span>
    </div>

    <div>
      <label for="email">Email:</label>
      <input type="email" class="text" name="email" id="email">
    </div>

    <div>
      <label for="address">Address:</label>
      <input type="text" class="text" name="address" id="address">
    </div>

    <div class="full-width">
      <h4>User Skills</h4>
      <div class="inline-group">
        <input type="checkbox" name="skill[]" value="php" id="php">
        <label for="php">PHP</label>

        <input type="checkbox" name="skill[]" value="Java" id="Java">
        <label for="Java">Java</label>

        <input type="checkbox" name="skill[]" value="Node" id="Node">
        <label for="Node">Node</label>

        <input type="checkbox" name="skill[]" value="React" id="React">
        <label for="React">React</label>
      </div>
    </div>
<!-- 
    <div class="full-width">
      <h4>Gender</h4>
      <div class="inline-group">
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">Male</label>

        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Female</label>
      </div>
    </div>

    <div>
      <label for="city">City:</label>
      <select name="city" id="city">
        <option value="kathmandu">Ktm</option>
        <option value="pokhara">Pokhara</option>
        <option value="chitwan">Chitwan</option>
      </select>
    </div> -->

    <div>
      <label for="age">Age:</label>
      <input type="range" name="age" min="18" max="100" id="age">
    </div>

    <div class="full-width">
      <button type="submit">Add New User</button>
    </div>
  </form>
</div>


<style>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f0f2f5;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.form-container {
  background-color: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  width: 600px;
}

.grid-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.grid-form h4 {
  margin-bottom: 10px;
  color: #555;
}

.grid-form label {
  margin-bottom: 5px;
  font-size: 14px;
  color: #333;
}

.grid-form input[type="text"],
.grid-form input[type="email"],
.grid-form select {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 14px;
}

.grid-form input[type="range"] {
  width: 100%;
}

.inline-group {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  align-items: center;
}

.inline-group input {
  margin-right: 5px;
}

.full-width {
  grid-column: span 2;
}

button {
  width: 100%;
  padding: 12px;
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

@media (max-width: 600px) {
  .grid-form {
    grid-template-columns: 1fr;
  }

  .full-width {
    grid-column: span 1;
  }
} 
</style>