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
                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScx0WFry4uxu-ZvtHm7kfMcCfFpBj7YyuawppqFvQWU1__wnA/viewform?embedded=true&pli=1"
                                                        target="blank">
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
                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScx0WFry4uxu-ZvtHm7kfMcCfFpBj7YyuawppqFvQWU1__wnA/viewform?embedded=true&pli=1"
                                                        target="blank">
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
                    <a href="{{ route('sell-forex') }}">
                        <li> <i class="fa-brands fa-sellcast"></i> Sell Forex </li>
                    </a>
                    <a href="#">
                        <li><i class="fa-regular fa-credit-card"></i> Reload Card </li>
                    </a>
                    <a href="#">
                        <li> <i class="fa-light fa-abacus"></i> Study Aboard </li>
                    </a>
                    <a href="#">
                        <li> <i class="fa-brands fa-gg-circle"></i> Send Money </li>
                    </a>
                    <a href="#">
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
                                <option value="">Select Currency</option>
                                <option value="Saudi Arabia" data-img="{{ asset('user/flag-icon/saudi.png') }}"> SAR -  Saudi Arabian Riyals</option>
                                <option value="USA" data-img="{{ asset('user/flag-icon/united-states-of-america.png') }}"> USD - US   Dollars</option>
                                <option value="UK" data-img="{{ asset('user/flag-icon/united-kingdom.png') }}"> GBP - Pound Sterling</option>
                                <option value="UAE" data-img="{{ asset('user/flag-icon/UAE.png') }}"> UAE - UAE Dirham</option>
                                <option value="Europe" data-img="{{ asset('user/flag-icon/european-union.png') }}"> EUR - The Euro</option>
                                <option value="India" data-img="{{ asset('user/flag-icon/indai.png') }}"> INR - Indian Rupees</option>
                                <option value="JPY" data-img="{{ asset('user/flag-icon/indai.png') }}">JPY - Japanese Yen</option>
                                <option value="AUD" data-img="{{ asset('user/flag-icon/indai.png') }}"> AUD - Australian Dollar</option>
                              <option value="CAD" data-img="{{ asset('user/flag-icon/indai.png') }}"> CAD - Canadian Dollar</option>
                               <option value="SGD" data-img="{{ asset('user/flag-icon/indai.png') }}"> SGD - Singapore Dollar</option>




                            </select>
                        </div>
                        <div class="form-row">
                            <label for="toCountry">To</label>
                            <select id="toCountry" name="toCountry" onchange="convertCurrency()">
                                <option value="">Select Currency</option>
                                <option value="India" data-img="{{ asset('user/flag-icon/indai.png') }}"> INR - Indian Rupees </option>
                                <option value="USA" data-img="{{ asset('user/flag-icon/united-states-of-america.png') }}"> USD - US  Dollars</option>
                                <option value="UK" data-img="{{ asset('user/flag-icon/united-kingdom.png') }}"> GBP - Pound Sterling</option>
                                <option value="UAE" data-img="{{ asset('user/flag-icon/UAE.png') }}"> UAE - UAE  Dirham</option>
                                <option value="Europe" data-img="{{ asset('user/flag-icon/european-union.png') }}"> EUR - The Euro</option>
                                <option value="Saudi Arabia" data-img="{{ asset('user/flag-icon/saudi.png') }}"> SAR - Saudi Arabian Riyals</option>
                                <option value="JPY" data-img="{{ asset('user/flag-icon/indai.png') }}">JPY - Japanese Yen</option>
                                <option value="AUD" data-img="{{ asset('user/flag-icon/indai.png') }}"> AUD - Australian Dollar</option>
                              <option value="CAD" data-img="{{ asset('user/flag-icon/indai.png') }}"> CAD - Canadian Dollar</option>
                               <option value="SGD" data-img="{{ asset('user/flag-icon/indai.png') }}"> SGD - Singapore Dollar</option>

                            </select>
                        </div>
                    </div>
                </form>
                <div class="Convert">
                    <div id="converted_amount"></div>
                    <div id="from_amount"></div>
                    <div id="total_money" class="total_money"></div>
                    <div id="rate_from_1"></div>
                    <div id="rate_to_1"></div>
                </div>


                <hr>
                <div class="forex_submit">
                    <p style="text-align:center ">Communication Details (Your order confirmation details will be sent
                        to
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



            <script>
                const apiKey = '593b72f2821a6b3e2d6a037b';
                let exchangeRates = {};

                async function fetchExchangeRates(baseCurrency) {
                    try {
                        let response = await fetch(`https://v6.exchangerate-api.com/v6/${apiKey}/latest/${baseCurrency}`);
                        let data = await response.json();

                        if (data.result === "success") {
                            exchangeRates = data.conversion_rates;
                        } else {
                            console.error("Error fetching exchange rates:", data.error);
                        }
                    } catch (error) {
                        console.error("API request failed:", error);
                    }
                }

                async function convertCurrency() {
                    let fromCountry = document.getElementById("fromCountry").value;
                    let toCountry = document.getElementById("toCountry").value;
                    let forexAmount = parseFloat(document.getElementById("forex_amount").value);

                    let fromAmountDiv = document.getElementById("from_amount");
                    let totalMoneyDiv = document.getElementById("total_money");
                    let rateFrom1Div = document.getElementById("rate_from_1");
                    let rateTo1Div = document.getElementById("rate_to_1");

                    // Reset fields if inputs are invalid
                    if (!fromCountry || !toCountry || isNaN(forexAmount)) {
                        fromAmountDiv.innerHTML = "";
                        totalMoneyDiv.innerHTML = "";
                        rateFrom1Div.innerHTML = "";
                        rateTo1Div.innerHTML = "";
                        return;
                    }

                    // Currency Data Mapping
                    const currencyData = {
                        "USA": { code: "USD", name: "US Dollars" },
                        "UK": { code: "GBP", name: "Pound Sterling" },
                        "UAE": { code: "AED", name: "UAE Dirham" },
                        "Europe": { code: "EUR", name: "The Euro" },
                        "Saudi Arabia": { code: "SAR", name: "Saudi Arabian Riyals" },
                        "India": { code: "INR", name: "Indian Rupees" },
                        "JPY": { code: "JPY", name: "Japanese Yen" },
                        "AUD": { code: "AUD", name: "Australian Dollar" },
                          "CAD": { code: "CAD", name: "Canadian Dollar" },
                           "SGD": { code: "SGD", name: "Singapore Dollar" }
                    };

                    let fromCurrencyData = currencyData[fromCountry];
                    let toCurrencyData = currencyData[toCountry];

                    if (!fromCurrencyData || !toCurrencyData) {
                        fromAmountDiv.innerHTML = "Invalid selection of countries.";
                        return;
                    }

                    let fromCurrency = fromCurrencyData.code;
                    let toCurrency = toCurrencyData.code;

                    // Fetch Exchange Rates
                    await fetchExchangeRates(fromCurrency);

                    if (exchangeRates[toCurrency]) {
                        let convertedAmount = forexAmount * exchangeRates[toCurrency];

                        // Subtract 0.50 from the converted amount
                        let reducedAmount = convertedAmount - 0.50;

                        // Fix floating point precision and ensure two decimal places
                        reducedAmount = Math.round((reducedAmount + Number.EPSILON) * 100) / 100;

                        let rateTo1Currency = exchangeRates[toCurrency];
                        let rateFrom1Currency = (1 / rateTo1Currency).toFixed(4);

                        // Display Results
                        fromAmountDiv.innerHTML = `${forexAmount} ${fromCurrencyData.name} = `;
                        totalMoneyDiv.innerHTML =
                            `<span class="bold">${reducedAmount.toFixed(2)} ${toCurrencyData.name}</span> `;
                        rateFrom1Div.innerHTML =
                            `1 ${fromCurrencyData.name} = ${rateTo1Currency.toFixed(4)} ${toCurrencyData.name}`;
                        rateTo1Div.innerHTML =
                            `1 ${toCurrencyData.name} = ${rateFrom1Currency} ${fromCurrencyData.name}`;
                    } else {
                        fromAmountDiv.innerHTML = "Error fetching rates for the selected currencies.";
                    }
                }
            </script>




        </div>

    </section>




</section>
