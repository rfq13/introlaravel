@extends("layout.app")

@section("title","Register")
@section("content")
<form action="/welcome" method="post">
  @csrf
  <p>First name:</p>
  <input type="text" name="fname" id="">
  <p>Last name:</p>
  <input type="text" name="lname" id="">
  <p>Gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <p>Nationality:</p>
  <select name="nasional" id="">
    <option value="Indonesia">Indonesia</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Singapura">Indonesia</option>
  </select>
  <p>Language Spoken:</p>
  <input type="radio" id="bahasa" name="bahasa" value="bahasa">
  <label for="bahasa">Bahasa Indonesia</label><br>
  <input type="radio" id="English" name="english" value="English">
  <label for="English">English</label><br>
  <input type="radio" id="other" name="other" value="other">
  <label for="other">Other</label>
  <p>Bio:</p>
  <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
  <button type="submit">Sign Up</button>
</form>
@endsection