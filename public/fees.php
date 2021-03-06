<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    <?php include("stylesheet/test.css")?>
</style>

<body>
    <div class='smallcontainer detailproduct'>
        <div class='rowwf'>
            <div class="col2">
                <h1 class='hf'>All about Fees!</h1>
                <p class='hf1'> Everything you need to know about the pricing on our website.</p>
            </div>
            <div class="col2">
                <img src='../pics_nham/fee2.png' alt="Goods picture">
            </div>
        </div>
        <div class='rowwf'>
            <div class='col3'>
                
                <h2>Monthly renting fee</h2>
                <p>Monthly renting fee is around 500 - 1000$ depends on
                    your goods and the position you want to place your store
                    in our shopping mall. The fee will be charged after the Contract is signed.
                    <span>
                        <a class='viewmore' href='#monthlyrent'>View more</a>
                    </span>
                </p>
                

            </div>
            <div class='col3'>
                
                    <h2>Commission fee</h2>
                    <p>Commission fees will apply to local Marketplace
                        sellers with ≥ 50 completed orders since date
                        joined on TaoHu. The fee will only
                        be charged on orders placed.
                        <span>
                            <a class='viewmore' href='#commissionfee'>View more</a>
                        </span>
                    </p>

                
                    
            </div>
            <div class='col3'>
                    
                    <h2>Premium member fee</h2>
                    <p>Preminum member fee will be available after you have signed
                        the contract and work with us around one years.
                        <span>
                            <a class='viewmore' href='#premiumfee'>View more</a>
                        </span>
                    </p>
            

            </div>
        </div>
        <div class='rowwf' id='monthlyrent'>
            <div class='col2'>
                <h1 class='infofee'>Monthly renting fee</h1> 
                <h2 class='hfee' >Information</h2>
                    <p class='detailfee'> Space Type:	Mall Shop </p>
                    <p class='detailfee'> Floor/Access:	Shopping mall </p>
                    <p class='detailfee'>  Rental Capacity:	Entire</p>
                    <p class='detailfee'>  Size:	800 sq ft</p>
                    <p class='detailfee'> Minimum Rental:	1 month </p>
                <h2 class='hfee' >Address</h2>
                    <p class='detailfee'> We have two shopping mall: in Ho Chi Minh & Ha Noi. </p>
                    <p class='detailfee'> Ho Chi Minh address: 22 TaoHu Street, 22 District, Ho Chi Minh City.</p>
                    <p class='detailfee'> Ha Noi address: 22 TaoHu Street, 22 District, Hanoi. </p>
                <h2 class='hfee' >Price</h2>
                    <p class='detailfee'>Around: <span class='nham'>500$ - 1000$ / month</span></p>
                    <p class='detailfee'>Tel: (+84) 2222222. Please contact us for detail information and contract.</p>
            </div>
            <div class='col2'> <img class='rent' src='../pics_nham/rent.png'>
        </div>  
        <div class='rowwf' id='commissionfee'>
            <div class='col2'>
                <h1 class='infofee'>Commission fee</h1> 
                <h2 class='hfee' >Information</h2>
                <p class='detailfee'>Commission fee is an amount charged to Taohu Mall sellers based on 
                    the price of a product listing. We will use Commission fee when you only want to rent 
                    online shop</p>
                <p class='detailfee'> The commision fee is calculated as a % of the product listing price,
                        before any vouchers or promotional discounts from Taohu are applied. Commission fee
                        varies according to the product category. </p>
                        <h2 class='hfee' >Price</h2>
                <p class='detailfee'>Around: <span class='nham'3% - 5% / product</span></p>
                <p class='detailfee'>Tel: (+84) 2222222. Please contact us for detail information and contract.</p>
            </div>
            <div class='col2'> <img class='rent' src='../pics_nham/money.png'></div>
        <div class='rowwf' id='premiumfee'>
            <div class='col2'>
                <h1 class='infofee'>Premium member fee</h1> 
                <h2 class='hfee' >Information</h2>
                <p class='detailfee'> Our premium fee will only be available when you have signed a contract and rent 
                    a shop for around 12 months.</p>
                <p class='detailfee'>When unlocked premium membership, you will receive free voucher for Commision fee.</p>
                <p class='detailfee'>The renting price will also discount around 10% - 20% for our premium customers.
                    You will have free advertisement on our large signboard outside the mall two days every month.
                </p>
                <h2 class='hfee' >Price</h2>
                    <p class='detailfee'>Around: <span class='nham'>100$ - 500$/ month</span></p>
                    <p class='detailfee'>Tel: (+84) 2222222. Please contact us for detail information and contract.</p>
            </div>
            <div class='col2'>
                    <img class='premiumpic' src='../pics_nham/premium.png'>
            </div>
        </div>
        </div>
    </div>

        
    </div>
    <br>
    <button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
    <script type="text/javascript" src="./js/shared.js"></script>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>