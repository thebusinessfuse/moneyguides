<style>


/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
}
.centered h4{
    font-size: 35px;
  color: black;
  font-weight: bolder;
}
.centered p{
    font-size: 20px;
  color: black;
  font-weight: bolder;
}
.img-stapper{
    opacity: 0.5;
    width:100%;
    height: 50vh;
}

.multisteps-form__progress {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
}

.multisteps-form__progress-btn {
    transition-property: all;
    transition-duration: 0.15s;
    transition-timing-function: linear;
    transition-delay: 0s;
    position: relative;
    padding-top: 20px;
    color: rgba(108, 117, 125, 0.7);
    text-indent: -9999px;
    border: none;
    background-color: transparent;
    outline: none !important;
    cursor: pointer;
}

@media (min-width: 500px) {
    .multisteps-form__progress-btn {
        text-indent: 0;
    }
}

@media (max-width: 500px) {}

.multisteps-form__progress-btn:before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 13px;
    height: 13px;
    content: '';
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    border: 2px solid currentColor;
    border-radius: 50%;
    background-color: #fff;
    box-sizing: border-box;
    z-index: 3;
}

.multisteps-form__progress-btn:after {
    position: absolute;
    top: 5px;
    left: calc(-50% - 13px / 2);
    transition-property: all;
    transition-duration: 0.15s;
    transition-timing-function: linear;
    transition-delay: 0s;
    display: block;
    width: 100%;
    height: 2px;
    content: '';
    background-color: currentColor;
    z-index: 1;
}

.multisteps-form__progress-btn:first-child:after {
    display: none;
}

.multisteps-form__progress-btn.js-active {
    color: #236b3a;
}

.multisteps-form__progress-btn.js-active:before {
    -webkit-transform: translateX(-50%) scale(1.2);
    transform: translateX(-50%) scale(1.2);
    background-color: currentColor;
}

.multisteps-form__form {
    position: relative;
}

.multisteps-form__panel {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 0;
    opacity: 0;
    visibility: hidden;
}

.multisteps-form__panel.js-active {
    height: auto;
    opacity: 1;
    visibility: visible;
}

.multisteps-form__panel[data-animation="scaleOut"] {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}

.multisteps-form__panel[data-animation="scaleOut"].js-active {
    transition-property: all;
    transition-duration: 0.2s;
    transition-timing-function: linear;
    transition-delay: 0s;
    -webkit-transform: scale(1);
    transform: scale(1);
}

.multisteps-form__panel[data-animation="slideHorz"] {
    left: 50px;
}

.multisteps-form__panel[data-animation="slideHorz"].js-active {
    transition-property: all;
    transition-duration: 0.25s;
    transition-timing-function: cubic-bezier(0.2, 1.13, 0.38, 1.43);
    transition-delay: 0s;
    left: 0;
}

.multisteps-form__panel[data-animation="slideVert"] {
    top: 30px;
}

.multisteps-form__panel[data-animation="slideVert"].js-active {
    transition-property: all;
    transition-duration: 0.2s;
    transition-timing-function: linear;
    transition-delay: 0s;
    top: 0;
}

.multisteps-form__panel[data-animation="fadeIn"].js-active {
    transition-property: all;
    transition-duration: 0.3s;
    transition-timing-function: linear;
    transition-delay: 0s;
}

.multisteps-form__panel[data-animation="scaleIn"] {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
}

.multisteps-form__panel[data-animation="scaleIn"].js-active {
    transition-property: all;
    transition-duration: 0.2s;
    transition-timing-function: linear;
    transition-delay: 0s;
    -webkit-transform: scale(1);
    transform: scale(1);
}
</style>
<?php include 'header.php'; ?>
</head>

<body>
    <!-- partial:index.partial.html -->
    <!--PEN CONTENT     -->
    <div class="content">
        <!--content inner-->
        <div class="content__inner">

            <div class="container overflow-hidden">
                <!--multisteps-form-->
                <div class="multisteps-form">
                    <!--progress bar--><br><br>
                    <div class="row text-center">
                        <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="User Info">Register</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">Data
                                    Gathering</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Risk
                                    Profiling</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Financial
                                    Plan
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Plan
                                    Implementation</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Mobile App
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 col-lg-12 m-auto text-center">
                            <form class="multisteps-form__form">
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/210186/pexels-photo-210186.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        width="100%" class="img-stapper">
                                        <div class="centered">
                                            <h4><b>Register</b></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, a?</p>
                                        </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/33041/antelope-canyon-lower-canyon-arizona.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        width="100%" class="img-stapper">
                                        <div class="centered">
                                            <h4>Data Gathering</h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, commodi!</p>
                                        </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        width="100%" class="img-stapper">
                                        <div class="centered">
                                            <h4>Risk Profiling</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, quam.</p>
                                        </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/2440024/pexels-photo-2440024.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        width="100%" class="img-stapper">
                                        <div class="centered">
                                            <h4>Financial Plan</h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat, vel.</p>
                                        </div>
                                </div>

                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/6992/forest-trees-northwestisbest-exploress.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        width="100%" class="img-stapper">
                                        <div class="centered">
                                            <h4>Plan Implementation</h4>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, iusto.</p>
                                        </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                    data-animation="scaleIn">
                                    <img src="https://images.pexels.com/photos/2440024/pexels-photo-2440024.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        width="100%" class="img-stapper">
                                        <div class="centered">Mobile App</div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js "
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous ">
    </script>
    <script>
    //DOM elements
    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next'
    };


    //remove class from a set of items
    const removeClasses = (elemSet, className) => {

        elemSet.forEach(elem => {

            elem.classList.remove(className);

        });

    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {

        let currentNode = elem;

        while (!currentNode.classList.contains(parentClass)) {
            currentNode = currentNode.parentNode;
        }

        return currentNode;

    };

    //get active button step number
    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = activeStepNum => {

        //remove active state from all the state
        removeClasses(DOMstrings.stepsBtns, 'js-active');

        //set picked items to active
        DOMstrings.stepsBtns.forEach((elem, index) => {

            if (index <= activeStepNum) {
                elem.classList.add('js-active');
            }

        });
    };

    //get active panel
    const getActivePanel = () => {

        let activePanel;

        DOMstrings.stepFormPanels.forEach(elem => {

            if (elem.classList.contains('js-active')) {

                activePanel = elem;

            }

        });

        return activePanel;
    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {

        //remove active class from all the panels
        removeClasses(DOMstrings.stepFormPanels, 'js-active');

        //show active panel
        DOMstrings.stepFormPanels.forEach((elem, index) => {
            if (index === activePanelNum) {
                elem.classList.add('js-active');
                setFormHeight(elem);

            }
        });

    };

    //set form height equal to current panel height
    const formHeight = activePanel => {

        const activePanelHeight = activePanel.offsetHeight;

        DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

    };

    const setFormHeight = () => {
        const activePanel = getActivePanel();

        formHeight(activePanel);
    };

    //STEPS BAR CLICK FUNCTION
    DOMstrings.stepsBar.addEventListener('click', e => {

        //check if click target is a step button
        const eventTarget = e.target;

        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
            return;
        }

        //get active button step number
        const activeStep = getActiveStep(eventTarget);

        //set all steps before clicked (and clicked too) to active
        setActiveStep(activeStep);

        //open active panel
        setActivePanel(activeStep);
    });

    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {

        const eventTarget = e.target;

        //check if we clicked on `PREV` or NEXT` buttons
        if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList
                .contains(`${DOMstrings.stepNextBtnClass}`))) {
            return;
        }

        //find active panel
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

        //set active step and active panel onclick
        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;

        } else {

            activePanelNum++;

        }

        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);

    });

    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);

    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);

    //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

    const setAnimationType = newType => {
        DOMstrings.stepFormPanels.forEach(elem => {
            elem.dataset.animation = newType;
        });
    };

    //selector onchange - changing animation
    const animationSelect = document.querySelector('.pick-animation__select');

    animationSelect.addEventListener('change', () => {
        const newAnimationType = animationSelect.value;

        setAnimationType(newAnimationType);
    });

    var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
    <?php include 'footer.php'; ?>