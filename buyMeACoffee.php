<style>
    .coffeContainer {
        position: fixed;
        bottom: 25px;
        left: 25px;
        user-select: none;
        z-index: 1900;
    }

    .coffeeBtnCont {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #2c3e50;
        border-radius: 50%;
        opacity: 0.7;
        transition: opacity 0.4s;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .coffeeBtnCont:hover {
        opacity: 1;
    }

    .coffeeBtn {
        font-size: 2rem;
        cursor: pointer;
    }

    .coffeePopup {
        width: 100%;
        max-width: 400px;
        position: fixed;
        bottom: 25px;
        left: 25px;
        display: none;
        border-radius: 8px;
        background-color: #ecf0f1;
        padding: 18px;
        border: solid 2px #ff6937;
        z-index: 2000;
    }

    .coffeeTextCont {
        text-align: center;
        font-size: 1.05rem;
        padding-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    .coffeeText {
        color: #c0392b;
    }

    #coffeeQuantity,
    #coffeeValue {
        /* color: #16a085; */
        font-weight: bold;
    }

    .coffeePopupCloseBtn {
        font-size: 1.3rem;
        font-weight: bold;
        cursor: pointer;
        color: #ff4757;
    }

    .coffeeQuantitySelector {
        display: flex;
        gap: 5px;
        justify-content: space-evenly;
        padding: 20px 0;
        background-color: rgba(255, 105, 55, .09);
        border: solid 1px rgba(255, 105, 55, .25);
        border-radius: 5px;
        align-items: center;
    }

    .coffeeIcon {
        width: 34px;
        height: 34px;
        padding-bottom: 10px;
        padding-left: 5px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: red;
        font-size: 2.2rem;
        background-color: #95a5a6;
    }

    .coffeeMultiplier {
        font-size: 1.2rem;
        color: #57606f;
    }

    .coffeeValueBtn {

        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: red;
        border-radius: 50%;
        font-size: 1.12rem;
        color: #ff6937;
        background-color: white;
        font-weight: bold;
        cursor: pointer;
        border: solid 1px #ff6937;
    }

    .coffeeSubmitBtnCont {
        padding-top: 15px;
    }

    .coffeeSubmitBtn {
        display: inline-block;
        width: 100%;
        text-align: center;
        padding: 15px;
        font-weight: bold;
        border-radius: 25px;
        background-color: #FF7D52;
        color: #fff;
        border: none;
        outline: none;
        transition: all 0.4s;
        cursor: pointer;
    }

    .coffeeSubmitBtn:hover {
        background-color: #ff6937;

    }

    .activeButton {
        background-color: #ff6937;
        color: white;
    }

    .showPopup {
        display: initial;
        animation: showPopup 0.4s forwards;
    }

    @keyframes showPopup {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .coffeeSupportText {
        padding-top: 15px;
        line-height: 16px;
    }

    .coffeeSupportText span {}

    @media screen and (max-width: 576px) {
        .coffeePopup {
            width: calc(100% - 12px);
            bottom: 25px;
            left: 5px !important;
            padding: 18px;
        }
    }
</style>


<div class="coffeContainer">
    <div class="coffeeBtnCont">
        <span class="coffeeBtn" title="Buy me a coffee" id="coffeeBtn" onclick="toggleCoffeePopup()">☕</span>
    </div>

    <div class="coffeePopup" id="coffeePopup">
        <div class="coffeeTextCont">
            <span class="coffeeText">Buy Me <span id="coffeeQuantity">1</span> Coffee(s) Worth <span id="coffeeValue">50</span> Rupees.</span>
            <span class="coffeePopupCloseBtn" title="Close" onclick="toggleCoffeePopup()">x</span>
        </div>
        <div class="coffeeQuantitySelector">
            <span class="coffeeIcon">☕</span>
            <span class="coffeeMultiplier">X</span>
            <span class="coffeeValueBtn activeButton" onclick="changeQuantity(1)">1</span>
            <span class="coffeeValueBtn" onclick="changeQuantity(3)">3</span>
            <span class="coffeeValueBtn" onclick="changeQuantity(5)">5</span>
            <span class="coffeeValueBtn" onclick="changeQuantity(10)">10</span>

        </div>
        <div class="coffeeSubmitBtnCont">
            <button class="coffeeSubmitBtn" href="/" id="coffeeSubmitBtn" onclick="buyCoffee()">Support for INR <span id="coffeeBtnValue">50</span>.</button>
        </div>
        <div class="coffeeSupportText">
            <span>Your support will help me to develop more free stuff for you... ❤️</span>
        </div>
    </div>

</div>

<script type="text/javascript">
    const coffeeBtn = document.getElementById('coffeeBtn')
    const coffeePopup = document.getElementById('coffeePopup')
    const coffeeQuantity = document.getElementById('coffeeQuantity')
    const coffeeValue = document.getElementById('coffeeValue')
    const coffeeBtnValue = document.getElementById('coffeeBtnValue')

    let quantity = 1;
    const pricePerCup = 50;
    const urls = {
        "1": "https://paytm.me/Ez-zTMN",
        "3": "https://paytm.me/0r-pKFM",
        "5": "https://paytm.me/7-3gtMQ",
        "10": "https://paytm.me/AL-vPpU",
    }

    function changeQuantity(value) {
        const {
            srcElement
        } = event;
        quantity = value;
        const allElementsHavingActiveClass = document.getElementsByClassName('activeButton')
        allElementsHavingActiveClass[0].classList.remove('activeButton')
        srcElement.classList.add('activeButton')
        coffeeQuantity.innerText = value
        coffeeValue.innerText = coffeeBtnValue.innerText = value * pricePerCup
    }

    const toggleCoffeePopup = () => coffeePopup.classList.toggle('showPopup')

    const buyCoffee = () => {
        window.open(urls[quantity], '_blank');
        toggleCoffeePopup();
    }

    (function() {
        coffeeValue.innerText = coffeeBtnValue.innerText = pricePerCup
    })();
</script>