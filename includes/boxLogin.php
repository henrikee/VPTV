<!-- Tehtiin kirjautumis file, mihin käyttäjä antaa tiedot sisäänkirjautumista varten -->
<!-- Käyttäjä antaa syöttämäänsä sähköpostia, sekä salasanaansa sisäänkirjatumista varten -->
<header>
  <h1>Kirjaudu sisään</h1>
</header>
<div class="boxLogin">
<form method="post">
  <h2>Sähköposti</h2> 
  <input type="text" name="givenEmail" placeholder="Kirjoita sähköpostiosoitteesi" maxlength="40"/>
    <h2>Salasana</h2>
    <input type="password" name="givenPassword" placeholder="Kirjoita salasana (väh. 8 merkkiä)" maxlength="40"/>
  <div class="btns">
    <button type="submit" name="submitUser" value="Kirjaudu">Kirjaudu</button>
    <button type="reset"  value="Resetoi">Tyhjennä</button>
  </div>
  <br>
  <p>Etkö ole vielä rekisteröitynyt?</p>
  <a id="signup" href="signup.php">Luo käyttäjätunnus!</a>
</form>
</div>


  