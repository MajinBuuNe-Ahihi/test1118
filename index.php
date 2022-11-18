<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;

  }

  body {
    position: relative;
    background-color: #ffffff;
    height: 100vh;
    width: 100vw;
    top: 0;
    left: 0;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    justify-content: flex-start;
    align-items: flex-start;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 700px;
    background-color: blue;
    border: #ffffff 2px solid;
    color: white;
    padding: 50px;
  }

  input {
    width: 100%;
    height: 31px;
  }

  textarea {
    width: 100%;
  }
  span {
    color: red;
    display: none;
  }
  span.active {
    display: block;
  }
</style>

<body>
  <form action="./submit.php" method="POST">
    <label for="fullname">Full Name</label>
    <input type="text" name="fullname" id="fullname">
    <label for="dateofbirth">Date of birth</label>
    <input type="date" name="dateofbirth" id="birth">
    <span id="error2">Age must contain 18 - 30 </span>
    <label for="email">Email</label>
    <input type="email" name="email" id="">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <span id="error1">phonenumber must has 10 ditgit </span>
    <label for="major">Major</label>
    <select name="major" id="">
      <option value="0">Bioinformation</option>
      <option value="1">Chemistry</option>
      <option value="2">Applied Math</option>
      <option value="3">Cyber securiry</option>
      <option value="4">Data science</option>
    </select>
    <label for="study">Want to continue the study</label>
    <select name="study" id="">
      <option value="0">Master</option>
      <option value="1">Phd</option>
    </select>
    <label for="job">the Job domain they want to seek after getting a bachelor degree </label>
    <select name="job" id="">
      <option value="0">Education</option>
      <option value="1">Government</option>
      <option value="2">Financial</option>
      <option value="3">Banking</option>
      <option value="4">Research and contruction</option>
    </select>
    <label for="vote">about enviroment </label>
    <select name="vote" id="">
      <option value="0">Very bad</option>
      <option value="1">Bad</option>
      <option value="2">Medium</option>
      <option value="3">Good</option>
      <option value="4">Very Good</option>
    </select>
    <label for="idea">ideas to improve the study environtment </label>
    <textarea name="idea" id="" cols="30" rows="10">

    </textarea>
    <button id="send" type="submit" >Send</button>
  </form>
  <script src="./index.js"></script>
</body>

</html>