<section class="section__form">
    <form action="search.php" name="form" action="" method="get" id="form-search">
        <div class="form-group">
            <label for="destino">
                <img class="form__svg" src="./img/location.svg" alt="" width="18px">
                Destino
            </label>
            <input type="text" name="destination" id="destination" type="text" onkeyup="getSuggestion(this.value)" onfocus="visiblemodal()" value="" onblur="invisibleModal()" />
        </div>
        <div class="form-group">
            <label for="checkin"><img class="form__svg" src="./img/calendar.svg" alt="" width="20px">
                Entrada</label>
            <input data-tipo="date" type="text" placeholder="00/00/0000" name="checkin" id="checkin" onfocus="(this.type='date')" onblur="(this.type='text')" />
        </div>
        <div class="form-group">
            <label for="saida">
                <img class="form__svg" src="./img/calendar.svg" alt="" width="20px">Saída</label>
            <input type="text" name="checkout" placeholder="00/00/0000" id="checkout" onfocus="(this.type='date')" onblur="(this.type='text')" />
        </div>
        <div class="form-group">
            <label for="hospedes">
                <img class="form__svg" src="./img/people.svg" alt="" width="20px">Hóspedes
            </label>
            <span type="text">2 adultos(s), 0 crianças(s)</span>
        </div>
        <div class="form-group">
            <button>Pesquisar</button>
        </div>
    </form>
    <div id="modal">
        <img id="poligon" src="./img/poligon.svg" alt="icone de triangulo em cima de dropdown" width="50px" />
    </div>
</section>
<script type="text/javascript" src="./js/getSuggestion.js"></script>
<script>
    setInterval(function() {
        location.reload(true);
    }, 100000);
</script>