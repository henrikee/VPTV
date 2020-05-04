<form class="diaryMark" method="post">
    <div>
        <div>
            <label class="diaryMarkingLabel">Sukupuoli</label><br>
            <div class="radio-group">
                <div>
                    <input value="mies"  name="givenGender" type="radio" >
                    <label class="diaryMarkingLabel">Mies</label>
                </div>
                <div>
                    <input value="nainen"  name="givenGender" type="radio">
                    <label class="diaryMarkingLabel">Nainen</label>
                </div>
                <div>
                    <input value="muu" name="givenGender"  type="radio">
                    <label  class="diaryMarkingLabel">Muu</label>
                </div>
            </div>
        </div>
        <div>
            <label class="diaryMarkingLabel">Ikä<br></label>
            <input type="text" name="givenAge" class="markingTxt">
        </div>
        <div>
            <label class="diaryMarkingLabel">Pituus (cm)<br></label>
            <input type="text" name="givenHeight" class="markingTxt">
        </div>
        <div>
            <label class="diaryMarkingLabel">Paino (kg)<br></label>
            <input type="text" name="givenWeight" class="markingTxt">
        </div>
        <div>
            <label class="diaryMarkingLabel">Vyötärönympärys (cm)<br></label>
            <input type="text" name="givenWaistCircuit" class="markingTxt">
        </div>
        <label class="diaryMarkingLabel">Systolinen (yläpaine) (Hgmm)<br></label>
        <input type="text" name="givenSystolic" class="markingTxt">
    </div>
    <label class="diaryMarkingLabel">Diastolinen (alapaine) (Hgmm)<br></label>
    <input type="text" name="givenDiastolic" class="markingTxt"><br>
    <button type="submit" name="submitHealthydata" class="btn" value="Tallenna">Tallenna terveystiedot</button>
    <button type="submit" name="resetHealthydata" class="btn" value="Peruuta">Hylkää terveystiedot</button>
</form>