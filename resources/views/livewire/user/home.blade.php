<section>
    <div class="hero_area">
        <div class="slider_section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="detail-box">
                                            <div>
                                                <h1>
                                                    RBI approved Forex and Money Changers
                                                </h1>
                                                {{-- <h2>
                                                    The Future of Trading.
                                                </h2> --}}
                                                <div class="">
                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScx0WFry4uxu-ZvtHm7kfMcCfFpBj7YyuawppqFvQWU1__wnA/viewform?embedded=true&pli=1" target="blank">
                                                        Enquiry Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="img-box">
                                            {{-- <img src="{{ asset('user/logo/currency.avif')}} "
                                                alt="" /> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="box">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="detail-box">
                                            <div>
                                                <h1>

                                                    Get the Best Rates on Foreign Exchange
                                                </h1>
                                                {{-- <p>
                                                    Compare quotes & get best exchange rates from RBI approved Forex Money Changers
                                                </p> --}}
                                                <div class="">
                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScx0WFry4uxu-ZvtHm7kfMcCfFpBj7YyuawppqFvQWU1__wnA/viewform?embedded=true&pli=1" target="blank">
                                                        Enquiry Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="img-box">
                                            <img src="images/slider-img.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <section class="how_section layout_padding">
        <div class="forex_container">
            <div class="Forex_nav">
                <ul>
                    <a href="">
                        <li> <i class="fa-solid fa-cart-shopping"></i> Buy Forex </li>
                    </a>
                    <a href="">
                        <li> <i class="fa-brands fa-sellcast"></i> Sell Forex </li>
                    </a>
                    <a href="">
                        <li><i class="fa-regular fa-credit-card"></i> Reload Card </li>
                    </a>
                    <a href="">
                        <li> <i class="fa-light fa-abacus"></i> Study Aboard </li>
                    </a>
                    <a href="">
                        <li> <i class="fa-brands fa-gg-circle"></i> Send Money </li>
                    </a>
                    <a href="">
                        <li> More </li>
                    </a>
                </ul>

            </div>


            <div class="forex_form">
                <form>
                    <div class="input_form">
                        <div class="form-row">
                            <label for="forex_amount">Enter Amount</label>
                            <input type="text" id="forex_amount" name="forex_amount" oninput="convertCurrency()">
                        </div>
                        <div class="form-row">
                            <label for="fromCountry">From</label>
                            <select id="fromCountry" name="fromCountry" onchange="convertCurrency()">
                                <option value="">Select Country</option>
                                <option value="Saudi Arabia" data-img="{{ asset('user/flag-icon/saudi-arabia.png') }}">
                                    Saudi Arabia</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="UAE">UAE</option>
                                <option value="Europe">Europe</option>

                                <option value="India">India</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label for="toCountry">To</label>
                            <select id="toCountry" name="toCountry" onchange="convertCurrency()">
                                <option value="">Select Country</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="UAE">UAE</option>
                                <option value="Europe">Europe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>

                            </select>
                        </div>
                    </div>
                </form>

                <div class="Convert">
                    <div id="converted_amount"> </div>
                    <div id="from_amount" ></div>
                    <div id="total_money" class="total_money"></div>
                    <div id="rate_from_1"></div>
                    <div id="rate_to_1"></div>
                </div>


                <hr>
                <div class="forex_submit">
                    <p style="text-align:center ">Communication Details (Your order confirmation details will be sent to
                        these contact details)</p>
                    @if (session('success'))
                        <div class="alert alert-success text-center" id="alert-message">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="submitForm">
                        <div class="submit_forms">
                            <div class="form_mobile">
                                <input type="text" wire:model="name" placeholder="Enter name" min="1">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form_mobile">
                                <input type="text" wire:model="mobile" placeholder="Mobile Number"
                                    min="1">
                                @error('mobile')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form_mobile">
                                <input type="text" wire:model="email" placeholder="Email Address">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form_mobile">
                                <button type="submit" class="btn btn-primary">Get Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {{-- <script>
                const apiKey = '593b72f2821a6b3e2d6a037b'; // Your API key
                let exchangeRates = {}; // To store API response dynamically

                async function fetchExchangeRates(baseCurrency) {
                    try {
                        let response = await fetch(`https://v6.exchangerate-api.com/v6/${apiKey}/latest/${baseCurrency}`);
                        let data = await response.json();

                        if (data.result === "success") {
                            exchangeRates = data.conversion_rates; // Store updated rates
                        } else {
                            console.error("Error fetching exchange rates:", data.error);
                        }
                    } catch (error) {
                        console.error("API request failed:", error);
                    }
                }

                // Function to convert currency
                async function convertCurrency() {
                    let fromCountry = document.getElementById("fromCountry").value;
                    let toCountry = document.getElementById("toCountry").value;
                    let forexAmount = parseFloat(document.getElementById("forex_amount").value);
                    let convertedAmountField = document.getElementById("converted_amount");

                    if (!fromCountry || !toCountry || isNaN(forexAmount) || forexAmount <= 0) {
                        convertedAmountField.innerHTML = "";
                        return;
                    }

                    const currencyData = {
                        "USA": "USD",
                        "UK": "GBP",
                        "UAE": "AED",
                        "Europe": "EUR",
                        "Saudi Arabia": "SAR",
                        "India": "INR"
                    };

                    let fromCurrency = currencyData[fromCountry];
                    let toCurrency = currencyData[toCountry];

                    if (!fromCurrency || !toCurrency) {
                        convertedAmountField.innerHTML = "Invalid selection";
                        return;
                    }

                    // Fetch exchange rates using "fromCurrency" as the base
                    await fetchExchangeRates(fromCurrency);

                    if (exchangeRates[toCurrency]) {
                        let convertedAmount = forexAmount * exchangeRates[toCurrency];
                        convertedAmountField.innerHTML = convertedAmount.toFixed(2); // Show 2 decimal places
                    } else {
                        convertedAmountField.innerHTML = "Error fetching rates";
                    }
                }
            </script> --}}
            <script>
                const apiKey = '593b72f2821a6b3e2d6a037b'; // Your API key
                let exchangeRates = {}; // To store API response dynamically

                // Fetch exchange rates
                async function fetchExchangeRates(baseCurrency) {
                    try {
                        let response = await fetch(`https://v6.exchangerate-api.com/v6/${apiKey}/latest/${baseCurrency}`);
                        let data = await response.json();

                        if (data.result === "success") {
                            exchangeRates = data.conversion_rates; // Store updated rates
                        } else {
                            console.error("Error fetching exchange rates:", data.error);
                        }
                    } catch (error) {
                        console.error("API request failed:", error);
                    }
                }

                // Function to convert currency
                async function convertCurrency() {
                    let fromCountry = document.getElementById("fromCountry").value;
                    let toCountry = document.getElementById("toCountry").value;
                    let forexAmount = parseFloat(document.getElementById("forex_amount").value);

                    // Get div elements
                    let fromAmountDiv = document.getElementById("from_amount");
                    let totalMoneyDiv = document.getElementById("total_money");
                    let rateFrom1Div = document.getElementById("rate_from_1");
                    let rateTo1Div = document.getElementById("rate_to_1");

                    // Ensure all required inputs are provided and valid
                    if (!fromCountry || !toCountry || isNaN(forexAmount) || forexAmount <= 0) {
                        fromAmountDiv.innerHTML = "";
                        totalMoneyDiv.innerHTML = "";
                        rateFrom1Div.innerHTML = "";
                        rateTo1Div.innerHTML = "";
                        return;
                    }

                    const currencyData = {
                        "USA": "USD",
                        "UK": "GBP",
                        "UAE": "AED",
                        "Europe": "EUR",
                        "Saudi Arabia": "SAR",
                        "India": "INR"
                    };

                    let fromCurrency = currencyData[fromCountry];
                    let toCurrency = currencyData[toCountry];

                    if (!fromCurrency || !toCurrency) {
                        fromAmountDiv.innerHTML = "Invalid selection of countries.";
                        return;
                    }

                    // Fetch exchange rates using "fromCurrency" as the base
                    await fetchExchangeRates(fromCurrency);

                    if (exchangeRates[toCurrency]) {
                        let convertedAmount = forexAmount * exchangeRates[toCurrency];
                        let rateTo1Currency = exchangeRates[toCurrency];
                        let rateFrom1Currency = (1 / rateTo1Currency).toFixed(
                        4); // Rate to convert 1 unit of target currency to base currency

                        // Display the results in separate divs
                        fromAmountDiv.innerHTML = ` ${forexAmount} ${fromCountry} = `;
                        totalMoneyDiv.innerHTML =
                            `<span class="bold"> ${convertedAmount.toFixed(2)} ${toCountry}</span>`;
                        rateFrom1Div.innerHTML = `1 ${fromCountry} = ${rateTo1Currency.toFixed(4)} ${toCountry}`;
                        rateTo1Div.innerHTML = `1 ${toCountry} = ${rateFrom1Currency} ${fromCountry}`;
                    } else {
                        fromAmountDiv.innerHTML = "Error fetching rates for the selected currencies.";
                    }
                }
            </script>





        </div>

    </section>




</section>
