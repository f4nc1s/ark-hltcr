@extends('layouts.master')
<title>Dashboard | {{ env('APP_NAME', 'Framework') }}</title>
@section('content')
<div class="container-fluid">
    <!-- Start::page-header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">
                            Dashboards
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Crypto</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Crypto</h1>
        </div>
        <div class="btn-list">
            <button class="btn btn-white btn-wave">
                <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
            </button>
            <button class="btn btn-primary btn-wave me-0">
                <i class="ri-share-forward-line me-1"></i> Share
            </button>
        </div>
    </div>
    <!-- End::page-header -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="swiper crypto-swiper swiper-basic">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="lh-1 avatar avatar-sm p-1 bg-light avatar-rounded">
                                            <img src="../assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="" class="w-auto">
                                        </div>
                                        <div>
                                            <h5 class="mb-0">134.56 <span class="text-muted fw-medium fs-13"> BTC</span></h5>
                                            <p class="mb-0 text-muted fs-12">Bitcoin</p>
                                        </div>
                                    </div>
                                    <div id="btc-marketcap"></div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mt-3 bg-light px-2 p-1 rounded-2">
                                    <p class="mb-0 fw-medium text-muted py-1">$18,574.58 USD</p>
                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.57%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="lh-1 avatar avatar-sm p-1 bg-light avatar-rounded">
                                            <img src="../assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg" alt="" class="w-auto">
                                        </div>
                                        <div>
                                            <h5 class="mb-0">578.05 <span class="text-muted fw-medium fs-13"> BNB</span></h5>
                                            <p class="mb-0 text-muted fs-12">Binanace</p>
                                        </div>
                                    </div>
                                    <div id="bnb-marketcap"></div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mt-3 bg-light px-2 p-1 rounded-2">
                                    <p class="mb-0 fw-medium text-muted py-1">$26,478.09 USD</p>
                                    <div class="text-danger"><i class="ti ti-trending-down me-1"></i>-0.12%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="lh-1 avatar avatar-sm p-1 bg-light avatar-rounded">
                                            <img src="../assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg" alt="" class="w-auto">
                                        </div>
                                        <div>
                                            <h5 class="mb-0">324.06 <span class="text-muted fw-medium fs-13"> ADA</span></h5>
                                            <p class="mb-0 text-muted fs-12">Cardano</p>
                                        </div>
                                    </div>
                                    <div id="ada-marketcap"></div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mt-3 bg-light px-2 p-1 rounded-2">
                                    <p class="mb-0 fw-medium text-muted py-1">$13,124.02 USD</p>
                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.12%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="lh-1 avatar avatar-sm p-1 bg-light avatar-rounded">
                                            <img src="../assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="" class="w-auto">
                                        </div>
                                        <div>
                                            <h5 class="mb-0">245.15 <span class="text-muted fw-medium fs-13"> ETH</span></h5>
                                            <p class="mb-0 text-muted fs-12">Ethereum</p>
                                        </div>
                                    </div>
                                    <div id="eth-marketcap"></div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mt-3 bg-light px-2 p-1 rounded-2">
                                    <p class="mb-0 fw-medium text-muted py-1">$27,684.05 USD</p>
                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.15%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="lh-1 avatar avatar-sm p-1 bg-light avatar-rounded">
                                            <img src="../assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt="" class="w-auto">
                                        </div>
                                        <div>
                                            <h5 class="mb-0">297.01 <span class="text-muted fw-medium fs-13"> USDT</span></h5>
                                            <p class="mb-0 text-muted fs-12">Tether</p>
                                        </div>
                                    </div>
                                    <div id="usdt-marketcap"></div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mt-3 bg-light px-2 p-1 rounded-2">
                                    <p class="mb-0 fw-medium text-muted py-1">$26,478.09 USD</p>
                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+1.15%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="lh-1 avatar avatar-sm p-1 bg-light avatar-rounded">
                                            <img src="../assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg" alt="" class="w-auto xrp-logo">
                                        </div>
                                        <div>
                                            <h5 class="mb-0">789.45 <span class="text-muted fw-medium fs-13"> XRP</span></h5>
                                            <p class="mb-0 text-muted fs-12">Ripple</p>
                                        </div>
                                    </div>
                                    <div id="xrp-marketcap"></div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mt-3 bg-light px-2 p-1 rounded-2">
                                    <p class="mb-0 fw-medium text-muted py-1">$14,872.03 USD</p>
                                    <div class="text-danger"><i class="ti ti-trending-down me-1"></i>-0.16%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="lh-1 avatar avatar-sm p-1 bg-light avatar-rounded">
                                            <img src="../assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg" alt="" class="w-auto">
                                        </div>
                                        <div>
                                            <h5 class="mb-0">245.15 <span class="text-muted fw-medium fs-13"> SOL</span></h5>
                                            <p class="mb-0 text-muted fs-12">Solana</p>
                                        </div>
                                    </div>
                                    <div id="sol-marketcap"></div>
                                </div>
                                <div class="d-flex align-items-center gap-2 justify-content-between mt-3 bg-light px-2 p-1 rounded-2">
                                    <p class="mb-0 fw-medium text-muted p-1">$18,784.05 USD</p>
                                    <div class="text-success"><i class="ti ti-trending-up me-1"></i>+0.15%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::row-1 -->

    <!-- Start:: row-2 -->
    <div class="row">
        <div class="col-xxl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title flex-fill">
                        Crypto Analysis
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary btn-sm">1D</button>
                        <button type="button" class="btn btn-primary-light btn-sm">1W</button>
                        <button type="button" class="btn btn-primary-light btn-sm">1M</button>
                        <button type="button" class="btn btn-primary-light btn-sm">1Y</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap p-3 bg-light rounded-2 mb-3 align-items-center">
                        <div class="me-3">
                            <div class="btn-group ms-2">
                                <button type="button" class="btn btn-primary border dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="../assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt=""></span>Bitcoin
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="../assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt=""></span>Etherium</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="../assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt=""></span>Tether</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="../assets/images/crypto-currencies/crypto-icons/xrp-xrp-logo.svg" alt=""></span>XRP</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);"><span class="avatar avatar-xs avatar-rounded me-2 align-middle"><img src="../assets/images/crypto-currencies/crypto-icons/tron-trx-logo.svg" alt=""></span>TRON</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-sm-evenly flex-fill">
                            <div class="m-sm-0 m-2">
                                <span>Symbol</span>
                                <p class="mb-0">BTC</p>
                            </div>
                            <div class="m-sm-0 m-2">
                                <span>Price Benchmark</span>
                                <p class="mb-0">136.00%</p>
                            </div>
                            <div class="m-sm-0 m-2">
                                <span>Price (USD)</span>
                                <p class="text-success mb-0">$54,564.60</p>
                            </div>
                            <div class="m-sm-0 m-2">
                                <span>Change (24H)</span>
                                <p class="text-danger mb-0">-0.14%</p>
                            </div>
                            <div class="m-sm-0 m-2">
                                <span>Market Cap</span>
                                <p class="mb-0">$1.32T</p>
                            </div>
                        </div>
                    </div>
                    <div id="crypto-analysis"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4">
            <div class="card custom-card">
                <div class="card-body p-0">
                    <div class="p-4 m-2 rounded-2 bg-primary text-fixed-white bg-crypto-balance">
                        <div class="d-flex align-items-center gap-2 justify-content-between">
                            <div>
                                <div class="mb-1 op-9">Total Balance</div>
                                <h4 class="text-fixed-white mb-1 fw-medium me-2">$262,933.05 USD</h4>
                                <span class="op-7 fs-12">Increased by </span><span class="badge bg-success mt-2 text-fixed-white p-1 text-end ms-1"><i class="ti ti-trending-up me-2"></i>12.2%</span>
                            </div>
                            <div class="ms-auto text-end">
                                <div class="avatar avatar-lg bg-primary1 shadow">
                                    <i class="ri-bank-line fs-4 lh-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-block-start-dashed g-0">
                        <div class="col border-end border-inline-end-dashed">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <span class="avatar avatar-md bg-primary2">
                                        <i class="ri-arrow-left-down-fill fs-20"></i>
                                    </span>
                                    <div>
                                        <div class="fw-medium text-muted">Deposit</div>
                                        <h5 class="mb-0">$1,654 USD</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-4">
                                <div class="d-flex align-items-center justify-content-center gap-3">
                                    <span class="avatar avatar-md bg-primary3">
                                        <i class="ri-arrow-right-up-fill fs-20"></i>
                                    </span>
                                    <div>
                                        <div class="fw-medium text-muted">Withdraw</div>
                                        <h5 class="mb-0">$654 USD</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">Currency Converter</div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light border d-flex align-items-center text-muted show" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
                            View All <i class="bx bx-caret-down ms-1 fs-15"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="javascript:void(0);">Yearly</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Monthly</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Weakly</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex gap-2 align-items-center buy-crypto">
                        <div class="input-group d-flex flex-nowrap align-items-center">
                            <input type="text" class="form-control crypto-buy-sell-input" aria-label="crypto buy select" placeholder="Enter">
                            <select class="form-control" data-trigger id="choices-single-default">
                                <option value="Choice 1">BTC</option>
                                <option value="Choice 2">ETH</option>
                                <option value="Choice 3">XRP</option>
                                <option value="Choice 4">DASH</option>
                                <option value="Choice 5">NEO</option>
                                <option value="Choice 6">LTC</option>
                                <option value="Choice 7">BSD</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-secondary btn-icon btn-sm my-2 rounded-pill"><i class="ti ti-arrows-exchange fs-19 align-middle"></i></a>
                        </div>
                        <div class="input-group d-flex flex-nowrap align-items-center">
                            <input type="text" class="form-control crypto-buy-sell-input" aria-label="crypto buy select" placeholder="25,784.00">
                            <select class="form-control" data-trigger id="choices-single-default1">
                                <option value="Choice 1">USD</option>
                                <option value="Choice 2">AED</option>
                                <option value="Choice 3">AUD</option>
                                <option value="Choice 4">ARS</option>
                                <option value="Choice 5">AZN</option>
                                <option value="Choice 6">BGN</option>
                                <option value="Choice 7">BRL</option>
                            </select>
                        </div>
                    </div>
                    <div class="bg-light p-3 rounded mt-2">
                        <div class="pb-1"><span class="text-default">Transaction Fee</span><span class="text-muted ms-2 fs-14 d-inline-block float-end">$3.04</span></div>
                        <div class="fs-14 py-1"><span class="text-default">Other Charges</span><span class="text-muted ms-2 fs-14 d-inline-block float-end">$6.55</span></div>
                        <div class="fw-semibold fs-14 pt-1">Total: <span class="fs-14 d-inline-block float-end">$25,784.00</span></div>
                    </div>
                    <div class=" mt-2 pt-1 d-flex gap-1">
                        <button type="button" class="btn btn-primary1-light flex-fill">History<i class="ms-2 ti ti-arrow-narrow-right align-middle d-inline-flex"></i></button>
                        <button type="button" class="btn btn-primary flex-fill">Convert<i class="ms-2 ti ti-arrow-narrow-right align-middle d-inline-flex"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-2 -->

    <!-- Start:: row-3 -->
    <div class="row">
        <div class="col-xxl-3 col-xl-6">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Market Cap
                    </div>
                    <a href="javascript:void(0);" class="btn btn-light btn-wave btn-sm text-muted waves-effect waves-light">View All<i class="ti ti-arrow-narrow-right ms-1"></i></a>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled market-cap-list mb-1">
                        <li>
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <span class="avatar bg-primary-transparent avatar-rounded svg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"></path></svg>
                                    </span>
                                </div>
                                <div class="flex-fill">
                                    <span class="fw-semibold d-block mb-1">Bitcoin</span>
                                    <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                        <span class="d-block">BTC</span>
                                        <div class="vr"></div>
                                        <span>$15 B</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="d-block h6 mb-1 fw-semibold">$18,907.01</span>
                                    <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                        <span class="d-block">+1,30.90</span>
                                        <div class="vr"></div>
                                        <span><i class="ti ti-arrow-narrow-up"></i>2.9%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <div class="avatar bg-secondary-transparent svg-secondary avatar-rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"></path></svg>
                                    </div>
                                </div>
                                <div class="flex-fill">
                                    <span class="fw-semibold d-block mb-1">Ethereum</span>
                                    <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                        <span class="d-block">ETH</span>
                                        <div class="vr"></div>
                                        <span>$11 B</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="d-block h6 mb-1 fw-semibold">$15,135.25</span>
                                    <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                        <span class="d-block">+1,07.09</span>
                                        <div class="vr"></div>
                                        <span><i class="ti ti-arrow-narrow-up"></i>3.0%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <span class="avatar bg-success-transparent svg-success avatar-rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"></path><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"></path></svg>
                                    </span>
                                </div>
                                <div class="flex-fill">
                                    <span class="fw-semibold d-block mb-1">Dash</span>
                                    <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                        <span class="d-block">DASH</span>
                                        <div class="vr"></div>
                                        <span>$23 B</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="d-block h6 mb-1 fw-semibold">$15,176.46</span>
                                    <div class="d-flex align-items-center text-danger gap-2 lh-1 fs-13">
                                        <span class="d-block">-1,8.01</span>
                                        <div class="vr"></div>
                                        <span><i class="ti ti-arrow-narrow-down"></i>0.1%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <div class="avatar bg-warning-transparent svg-warning avatar-rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"></path></svg>
                                    </div>
                                </div>
                                <div class="flex-fill">
                                    <span class="fw-semibold d-block mb-1">Golem</span>
                                    <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                        <span class="d-block">GLM</span>
                                        <div class="vr"></div>
                                        <span>$2 B</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="d-block h6 mb-1 fw-semibold">$11,576.1</span>
                                    <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                        <span class="d-block">+1,67.08</span>
                                        <div class="vr"></div>
                                        <span><i class="ti ti-arrow-narrow-up"></i>0.03%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <div class="avatar bg-info-transparent svg-info avatar-rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M59.5 87.6l5-19 11.9-4.4 3-11.2-.1-.2-11.7 4.3L76 25.2H52L40.9 66.8l-9.2 3.4-3.1 11.5 9.3-3.4-6.6 24.5h64l4.1-15.2z"></path></svg>
                                    </div>
                                </div>
                                <div class="flex-fill">
                                    <span class="fw-semibold d-block mb-1">Litecoin</span>
                                    <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                        <span class="d-block">LTC</span>
                                        <div class="vr"></div>
                                        <span>$13 B</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="d-block h6 mb-1 fw-semibold">$16,581.81</span>
                                    <div class="d-flex align-items-center text-danger gap-2 lh-1 fs-13">
                                        <span class="d-block">-1,01.05</span>
                                        <div class="vr"></div>
                                        <span><i class="ti ti-arrow-narrow-down"></i>3.8%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <div class="avatar bg-danger-transparent svg-danger avatar-rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"></path><path fill="#fff" d="M63.9 111.8c-.9-.4-1.7-.7-2.4-1.1-11.8-7-23.7-14.1-35.5-21.2-2.7-1.6-3.2-3.2-1.6-6.1 12-21.5 24-43 35.9-64.5.8-1.5 1.8-2.6 3.6-2.6s2.8 1.2 3.6 2.7c11.9 21.4 23.9 42.9 35.8 64.3 1.6 2.9 1.2 4.5-1.6 6.2l-35.1 21c-.8.5-1.8.9-2.7 1.3zm-4.2-22.2c-2.8-1.7-5.5-3.3-8.2-4.9-2-1.2-3.9-2.6-5.9-3.8-.8-.5-2-.9-2.9-.6-4.9 1.4-9.4 3.9-14 6.8 11.3 6.7 22.2 13.3 33.4 20 0-4.5.1-8.6 0-12.7-.1-2.5.9-4.5 2.6-6.1 1.2-1.1 2.6-2.1 4-2.8 4-1.9 7.2-4.5 9-8.9.8 1.3 1.5 2.3 2.2 3.4-1.9 3.5-4.7 6-8.1 7.8-1.6.8-3.1 1.8-4.5 2.9-.7.6-1.6 1.6-1.6 2.4-.2 4.5-.1 9.1-.1 14 11.2-6.7 22-13.2 33.3-19.9-4.4-2.2-8.4-4.3-12.4-6.2-2.9-1.4-4.9-3.4-6.1-6.3-.8-2-1.5-4.1-2.1-6.3-1.5-5.8-5-9.6-10.8-11.3-.6-.2-1.3-.3-2-.5 2.4-3.4 2.4-3.4 5.9-1.8 5.3 2.5 8.9 6.6 10.1 12.3 1.2 6 3.8 10.5 9.9 12.5 1.6.5 3.1 1.5 4.6 2.3.9.4 1.7.8 2.6 1.2.1-.1.2-.2.3-.4-10.8-19.6-21.8-39.2-32.7-58.8-.2 0-.4.1-.6.1v2.2c0 7-.2 14 .1 21 .1 4.1-1.5 6.8-4.8 8.9-1.2.8-2.4 1.5-3.7 2.1-4 2-6.7 5.2-7.6 9.5-.5 2.4-.4 4.9-.5 7.3-3.7-1.1-3.7-1.1-3.4-5.1.6-6.8 4.1-11.7 10-15 1.6-.9 3.3-1.7 4.6-3 .9-.9 1.7-2.4 1.7-3.7.2-7.7.1-15.4.1-23.2 0-.4-.1-.9-.3-1.7-11 20-21.8 39.4-32.9 59.2 3.8-1.8 7.2-3.3 10.6-4.9 2.8-1.3 5.6-1.1 8.2.3 1.7.9 3.4 1.8 4.9 3.1 2.8 2.5 5.8 4.5 9.8 5-.9 1.2-1.6 2.1-2.7 3.6z"></path></svg>
                                    </div>
                                </div>
                                <div class="flex-fill">
                                    <span class="fw-semibold d-block mb-1">Augur</span>
                                    <div class="d-flex align-items-center text-muted gap-2 lh-1 fs-13">
                                        <span class="d-block">REP</span>
                                        <div class="vr"></div>
                                        <span>$10 B</span>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span class="d-block h6 mb-1 fw-semibold">$10,107.51</span>
                                    <div class="d-flex align-items-center text-success gap-2 lh-1 fs-13">
                                        <span class="d-block">+1,10.30</span>
                                        <div class="vr"></div>
                                        <span><i class="ti ti-arrow-narrow-up"></i>1.89%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-6">
            <div class="card custom-card overflow-hidden">
                <div class="card-header justify-content-between">
                    <div class="card-title">Assets Overview</div>
                    <div class="dropdown">
                        <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <ul class="dropdown-menu" data-popper-placement="bottom-start">
                            <li><a class="dropdown-item" href="javascript:void(0);">Today </a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">This week</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div id="balanceAnalysis" class=""></div>
                    <div class="border-top border-block-start-dashed p-3">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="avatar avatar-md bg-primary">
                                <i class="ri-wallet-3-line fs-20"></i>
                            </span>
                            <div>
                                <div class="fw-medium text-muted op-7">Funding</div>
                                <h5 class="mb-0">$54,784 USD</h5>
                            </div>
                            <div class="ms-auto">
                                <div class="text-success fw-medium"><i class="ri-arrow-down-s-fill me-1 align-middle"></i>1.05%</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 pt-1 mb-1">
                            <span class="avatar avatar-md bg-primary1">
                                <i class="ri-arrow-up-down-line fs-20"></i>
                            </span>
                            <div>
                                <div class="fw-medium text-muted op-7">Trading</div>
                                <h5 class="mb-0">$23,489 USD</h5>
                            </div>
                            <div class="ms-auto">
                                <div class="text-danger fw-medium"><i class="ri-arrow-down-s-fill me-1 align-middle"></i>1.05%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5">
            <div class="card custom-card overflow-hidden">
                <div class="card-header justify-content-between">
                    <div class="card-title">Transaction History</div>
                    <a href="javascript:void(0);" class="text-muted text-decoration-underline link-offset-2">View All</a>
                </div>
                <div class="card-body p-0 pt-1">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Cryptocurrency</th>
                                    <th>Action</th>
                                    <th>Date & Time</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-md p-2 bg-primary3-transparent">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-medium">Bitcoin</span>
                                                <span class="d-block text-muted">BTC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Deposited</td>
                                    <td>12 Apr, 2024 13:12</td>
                                    <td>
                                        <span class="text-success">+ 25,00 BTC<i class="ri-arrow-up-line fs-12 lh-1 text-success ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-md p-2 bg-gray-200">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-medium">Ethereum</span>
                                                <span class="d-block text-muted">ETH</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Withdraw</td>
                                    <td>20 Apr, 2024 08:14</td>
                                    <td>
                                        <span class="text-danger">- 25,00 ETH<i class="ri-arrow-down-line fs-12 lh-1 text-danger ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-md p-2 bg-primary3-transparent">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-medium">Bitcoin</span>
                                                <span class="d-block text-muted">BTC</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Buy</td>
                                    <td>12 Apr, 2024 16:37</td>
                                    <td>
                                        <span class="text-success">+ 25,00 BTC<i class="ri-arrow-up-line fs-12 lh-1 text-success ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-md p-2 bg-success-transparent">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-medium">Tether</span>
                                                <span class="d-block text-muted">USDT</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Convert</td>
                                    <td>12 Apr, 2024 11:45</td>
                                    <td>
                                        <span class="text-success">+ $610,539 USDT<i class="ri-arrow-up-line fs-12 lh-1 text-success ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-rounded avatar-md p-2 bg-gray-200">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block fw-medium">Ethereum</span>
                                                <span class="d-block text-muted">ETH</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">Deposited</td>
                                    <td class="border-bottom-0">20 Apr, 2024 08:55</td>
                                    <td class="border-bottom-0">
                                        <span class="text-danger">- 25,00 ETH<i class="ri-arrow-down-line fs-12 lh-1 text-danger ms-1"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-3 -->

    <!-- Start:: row-4 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">My Portfolio</div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary btn-sm">1D</button>
                        <button type="button" class="btn btn-primary-light btn-sm">1W</button>
                        <button type="button" class="btn btn-primary-light btn-sm">1M</button>
                        <button type="button" class="btn btn-primary-light btn-sm">1Y</button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap nft-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Coin</th>
                                    <th>Price</th>
                                    <th>Price Graph</th>
                                    <th>24h Volume</th>
                                    <th>24h Change</th>
                                    <th>Market Cap</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/bitcoin-btc-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="fs-14">Bitcoin - BTC</div>
                                        </div>
                                    </td>
                                    <td>
                                        $34,283.53
                                    </td>
                                    <td>
                                        <div id="bitcoin-change"></div>
                                    </td>
                                    <td>
                                        21,457.02M
                                    </td>
                                    <td>
                                        <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>39.23%</span>
                                    </td>
                                    <td>
                                        $669,649,033,571
                                    </td>
                                    <td>
                                        <div class="btn-grp">
                                            <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                            <button type="button" class="btn btn-sm btn-primary1-light">Trade</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/ethereum-eth-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="fs-14">Etherium - ETH</div>
                                        </div>
                                    </td>
                                    <td>
                                        $1,800.81
                                    </td>
                                    <td>
                                        <div id="etherium-change"></div>
                                    </td>
                                    <td>
                                        11,784.22M
                                    </td>
                                    <td>
                                        <span class="text-danger"><i class="ri-arrow-down-s-fill me-1 fs-15 align-middle"></i>58.63%</span>
                                    </td>
                                    <td>
                                        $216,466,869,907
                                    </td>
                                    <td>
                                        <div class="btn-grp">
                                            <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                            <button type="button" class="btn btn-sm btn-primary1-light">Trade</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/tether-usdt-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="fs-14">Tether - USDT</div>
                                        </div>
                                    </td>
                                    <td>
                                        $1.00
                                    </td>
                                    <td>
                                        <div id="tether-change"></div>
                                    </td>
                                    <td>
                                        33,874.25M
                                    </td>
                                    <td>
                                        <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>49.30%</span>
                                    </td>
                                    <td>
                                        $84,641,938,780
                                    </td>
                                    <td>
                                        <div class="btn-grp">
                                            <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                            <button type="button" class="btn btn-sm btn-primary1-light">Trade</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/solana-sol-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="fs-14">Solana - SOL</div>
                                        </div>
                                    </td>
                                    <td>
                                        $35.97
                                    </td>
                                    <td>
                                        <div id="solana-change"></div>
                                    </td>
                                    <td>
                                        33,749.56M
                                    </td>
                                    <td>
                                        <span class="text-danger"><i class="ri-arrow-down-s-fill me-1 fs-15 align-middle"></i>144.58%</span>
                                    </td>
                                    <td>
                                        $15,083,616,607
                                    </td>
                                    <td>
                                        <div class="btn-grp">
                                            <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                            <button type="button" class="btn btn-sm btn-primary1-light">Trade</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/cardano-ada-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="fs-14">Cardano - ADA</div>
                                        </div>
                                    </td>
                                    <td>
                                        $0.3008
                                    </td>
                                    <td>
                                        <div id="cardano-change"></div>
                                    </td>
                                    <td>
                                        89,554.62M
                                    </td>
                                    <td>
                                        <span class="text-danger"><i class="ri-arrow-down-s-fill me-1 fs-15 align-middle"></i>51.15%</span>
                                    </td>
                                    <td>
                                        $10,600,249,889
                                    </td>
                                    <td>
                                        <div class="btn-grp">
                                            <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                            <button type="button" class="btn btn-sm btn-primary1-light">Trade</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        6
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="lh-1">
                                                <span class="avatar avatar-xs">
                                                    <img src="../assets/images/crypto-currencies/crypto-icons/binance-usd-busd-logo.svg" alt="">
                                                </span>
                                            </div>
                                            <div class="fs-14">Binance - BNB</div>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        $227.36
                                    </td>
                                    <td class="border-bottom-0">
                                        <div id="binance-change"></div>
                                    </td>
                                    <td class="border-bottom-0">
                                        65,547.15M
                                    </td>
                                    <td class="border-bottom-0">
                                        <span class="text-success"><i class="ri-arrow-up-s-fill me-1 fs-15 align-middle"></i>25.85%</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        $34,488,924,548
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="btn-grp">
                                            <button type="button" class="btn btn-sm btn-primary-light me-2">Buy</button>
                                            <button type="button" class="btn btn-sm btn-primary1-light">Trade</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex align-items-center">
                        <div>
                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 align-middle"></i>
                        </div>
                        <div class="ms-auto">
                            <nav aria-label="Page navigation" class="pagination-style-4">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript:void(0);">
                                            Prev
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link text-primary" href="javascript:void(0);">
                                            next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-4 -->


</div>
  @endsection