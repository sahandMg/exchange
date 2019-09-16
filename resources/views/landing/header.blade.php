<!-- pb_cover_v3  -->
<section class="overflow-hidden cover-bg-indigo cover-bg-opacity text-left exchange-header-section pb_gradient_v1 pb_slant-light pb-4 pt-4" id="section-home">
      <div class="container pb-4 pt-4">
       <div class="row exchange-header pb-4">
        <div class="col-md-5 col-sm-12">
         <h1 class="text-center" style="color: white;">راه آسان و امن برای تبدیل بیش از 140 ارز دیجیتال</h1>
        </div>
        <div class="col-md-7 col-sm-12 row">
          <div class="col-md-12">
            <div class="row mx-auto">
              <input id="inputCoinValue"  oninput="exchangeRate()" type="text" class="form-control inputCoin"  />
              <div class="select-exchange">
                <select name="item"><option value=""></option></select>
                <div>
                  <div class="selected-exchange">
                    <span><b role="presentation"></b></span>
                    <div id="inputCoinKind">Click and select </div>
                  </div>
                  <div class="select-dropdown-exchange">
                    <div class="item-search-exchange">
                      <input  id="inputCoinKindSearch" autocomplete="off" placeholder="جست و جو..." style="text-align: center;direction: rtl;">
                    </div>
                    <div class="items-exchange" id="inputCoinKindSelect">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <button type="button" id="reverseBtn" style="background-color: inherit;border: 0px;margin-top: 10px;font-size: 20px;"><i class="fa fa-exchange fa-3" aria-hidden="true"></i></button>
          </div>
          <div class="col-md-12">
            <div class="row mx-auto">
              <input  id="outputCoinValue" type="text" class="form-control inputCoin" placeholder="..." />
              <div class="select-exchange">
                <select name="item"><option value=""></option></select>
                <div>
                  <div class="selected-exchange">
                    <span><b role="presentation"></b></span>
                    <div id="outputCoinKind">Click and select </div>
                  </div>
                  <div class="select-dropdown-exchange">
                    <div class="item-search-exchange" >
                      <input  id="outputCoinKindSearch" autocomplete="off" placeholder="جست و جو..." style="text-align: center;direction: rtl;">
                    </div>
                    <div class="items-exchange"  id="outputCoinKindSelect">
                    </div>
                    <!-- <div class="item-count-exchange">
                       30 products
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 exchange-button-container mt-4">
              <a href="" id="exchangePageLink"><button class="btn btn-primary exchange-button" type="submit">تبدیل</button></a>
          </div>
        </div>
       </div>
      </div>
    </section>
    <!-- END section -->