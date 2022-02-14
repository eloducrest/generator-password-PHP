<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generateur de mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<form action="generatorPassw.php" method="post">
    <div class="form-outline">
        <input class="form-control" type="number" name="passwordLength" value="passwordLength" min="10" id="passwordLength">
        <label class="form-check-label" for="passwordLength">
            Longueur du mot de passe
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="lowerCases" value="lowerCases" id="lowerCases">
        <label class="form-check-label" for="lowerCases">
            Avec minuscule
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="upperCases" value="upperCases" id="upperCases">
        <label class="form-check-label" for="upperCases">
            Avec majuscule
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="digit" value="digit" id="digit">
        <label class="form-check-label" for="digit">
            Avec nombre
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="specChar" value="specChar" id="specChar">
        <label class="form-check-label" for="specChar">
            Avec charactere speciaux
        </label>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

<div>
    <h2>Mot de passe généré :</h2>
    <span>
        <?php
            echo 'coucou';
        ?>
    </span>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>