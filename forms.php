<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">
        <label>Email
            <input type="email" required name="name" placeholder="jamuasi001@st.ug.edu.gh">
        </label>
        <br><br>
        <label>Password
            <input 
            type="password"
            required 
            name="password"
            placeholder="************" 
            minlength="8">
        </label>
        <br><br>
        <button type="submit">
            Submit
        </button>
    </form>
</body>
</html>