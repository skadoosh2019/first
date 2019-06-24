@extends('layouts.layout')

@section('content')
    

<!-- Page Content -->
<div class="crypto-wrapper">
	<main class="crypto-main">
		<div class="crypto-main__content mdc-theme--text-primary-on-background">
			<div class="mdc-layout-grid">
				<div class="mdc-layout-grid__inner">
					<div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
						<div class="crypto-widget">
							<h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
								<span class="crypto-widget__heading-text">BTC Wallet Overview</span>
								<span class="crypto-widget__heading-border"></span>
							</h2>
							<div class="crypto-widget__content">
								<div class="crypto-wallet-overview">
									<h1 class="mdc-typography--headline2 crypto-margin-none crypto-text-shadow mdc-theme--primary crypto-wallet-overview__value">0.81215</h1>
									<span class="crypto-wallet-overview__stats crypto-wallet-overview__stats--up">12.4%</span>
									<span class="crypto-wallet-overview__market-value">$5316.8</span>
								</div>
							</div>
						</div>
						<div class="crypto-widget">
							<nav id="crypto-wallet-transaction" class="mdc-tab-bar">
								<div class="mdc-tab-scroller">
									<div class="mdc-tab-scroller__scroll-area">
										<div class="mdc-tab-scroller__scroll-content">
											<a class="mdc-tab mdc-tab--active" role="tab" aria-selected="true" tabindex="0">
												<span class="mdc-tab__content">
													<span class="mdc-tab__text-label">Send</span>
												</span>
												<span class="mdc-tab-indicator mdc-tab-indicator--active">
													<span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
												</span>
												<span class="mdc-tab__ripple"></span>
											</a>
											<a class="mdc-tab" role="tab" aria-selected="true" tabindex="0">
												<span class="mdc-tab__content">
													<span class="mdc-tab__text-label">Receive</span>
												</span>
												<span class="mdc-tab-indicator">
													<span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
												</span>
												<span class="mdc-tab__ripple"></span>
											</a>
										</div>
									</div>
								</div>
							</nav>
							<div id="wallet-form-tabs">
								<div class="crypto-wallet-form-panel crypto-wallet-form-panel--active">
									<form>
										<div class="mdc-text-field mdc-text-field--fullwidth crypto-text-field--fullwidth mdc-text-field--dense mdc-text-field--with-trailing-icon crypto-margin-bottom-big">
											<input type="text" id="send-to" class="mdc-text-field__input">
												<label for="send-to" class="mdc-floating-label">Send to</label>
												<i class="material-icons mdc-text-field__icon" tabindex="0" role="button">person_outline</i>
												<div class="mdc-line-ripple"></div>
											</div>
											<div class="mdc-text-field mdc-text-field--fullwidth crypto-text-field--fullwidth mdc-text-field--dense crypto-margin-bottom-big">
												<input type="text" id="send-amount" class="mdc-text-field__input">
													<label for="send-amount" class="mdc-floating-label">Amount</label>
													<div class="mdc-line-ripple"></div>
												</div>
											</form>
											<div class="crypto-wallet-form-panel--actions">
												<a href="{{route('wallet')}}" class="mdc-button">Send</a>
											</div>
										</div>
										<div class="crypto-wallet-form-panel">
											<form>
												<div class="mdc-text-field mdc-text-field--fullwidth crypto-text-field--fullwidth mdc-text-field--dense mdc-text-field--with-trailing-icon crypto-margin-bottom-big">
													<input type="text" id="receive-from" class="mdc-text-field__input">
														<label for="receive-from" class="mdc-floating-label">Receive from</label>
														<i class="material-icons mdc-text-field__icon" tabindex="0" role="button">people_outline</i>
														<div class="mdc-line-ripple"></div>
													</div>
													<div class="mdc-text-field mdc-text-field--fullwidth crypto-text-field--fullwidth mdc-text-field--dense">
														<input type="text" id="receive-amount" class="mdc-text-field__input">
															<label for="receive-amount" class="mdc-floating-label">Amount</label>
															<div class="mdc-line-ripple"></div>
														</div>
													</form>
													<div class="crypto-wallet-form-panel--actions">
														<a href="{{route('wallet')}}" class="mdc-button">Receive</a>
													</div>
												</div>
											</div>
										</div>
										<div class="crypto-widget">
											<h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
												<span class="crypto-widget__heading-text">BTC Market Price</span>
												<span class="crypto-widget__heading-border"></span>
											</h2>
											<div class="crypto-widget__content">
												<ul class="crypto-price-list">
													<li class="crypto-price-list__coin">
														<span class="crypto-price-list__coin-name mdc-typography--overline">US DOLLARS</span>
														<h3 class="crypto-price-list__coin-value mdc-theme--primary mdc-typography--subtitle1">$6,727.60</h3>
														<span class="crypto-price-list__coin-performance mdc-typography--subtitle1 crypto-price-list__coin-performance--up">0.17%</span>
														<span class="crypto-price-list__border mdc-theme--primary-bg"></span>
													</li>
													<li class="crypto-price-list__coin">
														<span class="crypto-price-list__coin-name mdc-typography--overline">UK POUNDS</span>
														<h3 class="crypto-price-list__coin-value mdc-theme--primary mdc-typography--subtitle1">$5,207.7</h3>
														<span class="crypto-price-list__coin-performance mdc-typography--subtitle1 crypto-price-list__coin-performance--down">-0.45%</span>
														<span class="crypto-price-list__border mdc-theme--primary-bg"></span>
													</li>
													<li class="crypto-price-list__coin">
														<span class="crypto-price-list__coin-name mdc-typography--overline">EUROS</span>
														<h3 class="crypto-price-list__coin-value mdc-theme--primary mdc-typography--subtitle1">$5,760.2</h3>
														<span class="crypto-price-list__coin-performance mdc-typography--subtitle1 crypto-price-list__coin-performance--up">0.05%</span>
														<span class="crypto-price-list__border mdc-theme--primary-bg"></span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="mdc-layout-grid__cell--span-9-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
										<div class="crypto-widget">
											<div class="mdc-layout-grid__inner">
												<div class="mdc-layout-grid__cell--span-6">
													<h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
														<span class="crypto-widget__heading-text">Wallet Performance</span>
														<span class="crypto-widget__heading-border"></span>
													</h2>
												</div>
												<div class="mdc-layout-grid__cell--span-6 crypto-hide-tablet crypto-hide-phone crypto-widget__actions">
													<a href="#" class="mdc-button data-weekly-refresh">Week</a>
													<a href="#" class="mdc-button data-monthly-refresh">Month</a>
													<a href="#" class="mdc-button data-yearly-refresh">Year</a>
												</div>
											</div>
											<div class="crypto-widget__content">
												<div id="wallet-performance-chart"></div>
											</div>
										</div>
										<div class="crypto-widget">
											<div class="mdc-layout-grid__inner">
												<div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-6-tablet mdc-layout-grid__cell--span-3-phone">
													<h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
														<span class="crypto-widget__heading-text">Transactions List</span>
														<span class="crypto-widget__heading-border"></span>
													</h2>
												</div>
												<div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-2-tablet mdc-layout-grid__cell--span-1-phone crypto-widget__actions">
													<div id="toolbar" class="toolbar mdc-menu-surface--anchor">
														<button class="mdc-button" id="menu-button">
															<i class="material-icons mdc-button__icon" aria-hidden="true">more_vert</i>
														</button>
														<div class="mdc-menu mdc-menu-surface" id="widget-menu">
															<ul class="mdc-menu__items mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
																<li class="mdc-list-item" role="menuitem" tabindex="0">WEEK</li>
																<li class="mdc-list-item" role="menuitem" tabindex="0">MONTH</li>
																<li class="mdc-list-item" role="menuitem" tabindex="0">YEAR</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="crypto-widget__content crypto-overflow-x-auto">
												<table class="mdl-data-table mdc-typography--overline">
													<thead class="crypto-transactions-list__labels">
														<tr>
															<th></th>
															<th class="mdl-data-table__cell--non-numeric">Date</th>
															<th class="mdl-data-table__cell--non-numeric">Description</th>
															<th class="mdl-data-table__cell--non-numeric">To/From</th>
															<th>Amount</th>
															<th class="mdl-data-table__cell--non-numeric">Status</th>
															<th class="mdl-data-table__cell--non-numeric"></th>
														</tr>
													</thead>
													<tbody>
														<tr class="crypto-transactions-list__item">
															<td class="mdl-data-table__cell--icon">
																<i class="fab fa-bitcoin"></i>
															</td>
															<td class="mdl-data-table__cell--non-numeric">28 JUN 2018, 17:21</td>
															<td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
															<td class="mdl-data-table__cell--non-numeric">E9873HJKDFJSFHA</td>
															<td>0.061BTC 
																
																<span class="crypto-transactions-list__item-price">($445)</span>
															</td>
															<td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--pending">Pending</td>
															<td>
																<a href="#">
																	<i class="material-icons">chevron_right</i>
																</a>
															</td>
														</tr>
														<tr class="crypto-transactions-list__item--details">
															<td colspan="7">
																<div class="mdc-layout-grid">
																	<div class="mdc-layout-grid__inner">
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Version no 
																					
																					<span class="mdc-list-item__meta">1</span>
																				</li>
																				<li class="mdc-list-item">
                              Flag 
																					
																					<span class="mdc-list-item__meta">0001</span>
																				</li>
																				<li class="mdc-list-item">
                              Lock time 
																					
																					<span class="mdc-list-item__meta">135180102155</span>
																				</li>
																			</ul>
																		</div>
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Witnesses 
																					
																					<span class="mdc-list-item__meta">2</span>
																				</li>
																				<li class="mdc-list-item">
                              In-counter 
																					
																					<span class="mdc-list-item__meta">177165211146174175</span>
																				</li>
																				<li class="mdc-list-item">
                              Out-counter 
																					
																					<span class="mdc-list-item__meta">111232135106240239</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
													<tbody class="crypto-transactions-list__separator">
														<tr>
															<td colspan="7"></td>
														</tr>
													</tbody>
													<tbody>
														<tr class="crypto-transactions-list__item">
															<td class="mdl-data-table__cell--icon">
																<i class="fab fa-ethereum"></i>
															</td>
															<td class="mdl-data-table__cell--non-numeric">28 MAR 2018, 18:22</td>
															<td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
															<td class="mdl-data-table__cell--non-numeric">E9873HJKDFAWRZ</td>
															<td>0.061BTC 
																
																<span class="crypto-transactions-list__item-price">($455)</span>
															</td>
															<td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
															<td>
																<a href="#">
																	<i class="material-icons">chevron_right</i>
																</a>
															</td>
														</tr>
														<tr class="crypto-transactions-list__item--details">
															<td colspan="7">
																<div class="mdc-layout-grid">
																	<div class="mdc-layout-grid__inner">
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Version no 
																					
																					<span class="mdc-list-item__meta">1</span>
																				</li>
																				<li class="mdc-list-item">
                              Flag 
																					
																					<span class="mdc-list-item__meta">0001</span>
																				</li>
																				<li class="mdc-list-item">
                              Lock time 
																					
																					<span class="mdc-list-item__meta">135180102155</span>
																				</li>
																			</ul>
																		</div>
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Witnesses 
																					
																					<span class="mdc-list-item__meta">2</span>
																				</li>
																				<li class="mdc-list-item">
                              In-counter 
																					
																					<span class="mdc-list-item__meta">177165211146174175</span>
																				</li>
																				<li class="mdc-list-item">
                              Out-counter 
																					
																					<span class="mdc-list-item__meta">111232135106240239</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
													<tbody class="crypto-transactions-list__separator">
														<tr>
															<td colspan="7"></td>
														</tr>
													</tbody>
													<tbody>
														<tr class="crypto-transactions-list__item">
															<td class="mdl-data-table__cell--icon">
																<i class="fab fa-viacoin"></i>
															</td>
															<td class="mdl-data-table__cell--non-numeric">28 JAN 2018, 14:59</td>
															<td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
															<td class="mdl-data-table__cell--non-numeric">E9873HJKDFFIKGQ</td>
															<td>0.061BTC 
																
																<span class="crypto-transactions-list__item-price">($423)</span>
															</td>
															<td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
															<td>
																<a href="#">
																	<i class="material-icons">chevron_right</i>
																</a>
															</td>
														</tr>
														<tr class="crypto-transactions-list__item--details">
															<td colspan="7">
																<div class="mdc-layout-grid">
																	<div class="mdc-layout-grid__inner">
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Version no 
																					
																					<span class="mdc-list-item__meta">1</span>
																				</li>
																				<li class="mdc-list-item">
                              Flag 
																					
																					<span class="mdc-list-item__meta">0001</span>
																				</li>
																				<li class="mdc-list-item">
                              Lock time 
																					
																					<span class="mdc-list-item__meta">135180102155</span>
																				</li>
																			</ul>
																		</div>
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Witnesses 
																					
																					<span class="mdc-list-item__meta">2</span>
																				</li>
																				<li class="mdc-list-item">
                              In-counter 
																					
																					<span class="mdc-list-item__meta">177165211146174175</span>
																				</li>
																				<li class="mdc-list-item">
                              Out-counter 
																					
																					<span class="mdc-list-item__meta">111232135106240239</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
													<tbody class="crypto-transactions-list__separator">
														<tr>
															<td colspan="7"></td>
														</tr>
													</tbody>
													<tbody>
														<tr class="crypto-transactions-list__item">
															<td class="mdl-data-table__cell--icon">
																<i class="fab fa-monero"></i>
															</td>
															<td class="mdl-data-table__cell--non-numeric">24 DEC 2017, 14:41</td>
															<td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
															<td class="mdl-data-table__cell--non-numeric">E9873HJKDFPWRE</td>
															<td>0.061BTC 
																
																<span class="crypto-transactions-list__item-price">($411)</span>
															</td>
															<td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
															<td>
																<a href="#">
																	<i class="material-icons">chevron_right</i>
																</a>
															</td>
														</tr>
														<tr class="crypto-transactions-list__item--details">
															<td colspan="7">
																<div class="mdc-layout-grid">
																	<div class="mdc-layout-grid__inner">
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Version no 
																					
																					<span class="mdc-list-item__meta">1</span>
																				</li>
																				<li class="mdc-list-item">
                              Flag 
																					
																					<span class="mdc-list-item__meta">0001</span>
																				</li>
																				<li class="mdc-list-item">
                              Lock time 
																					
																					<span class="mdc-list-item__meta">135180102155</span>
																				</li>
																			</ul>
																		</div>
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Witnesses 
																					
																					<span class="mdc-list-item__meta">2</span>
																				</li>
																				<li class="mdc-list-item">
                              In-counter 
																					
																					<span class="mdc-list-item__meta">177165211146174175</span>
																				</li>
																				<li class="mdc-list-item">
                              Out-counter 
																					
																					<span class="mdc-list-item__meta">111232135106240239</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
													<tbody class="crypto-transactions-list__separator">
														<tr>
															<td colspan="7"></td>
														</tr>
													</tbody>
													<tbody>
														<tr class="crypto-transactions-list__item">
															<td class="mdl-data-table__cell--icon">
																<i class="fab fa-ethereum"></i>
															</td>
															<td class="mdl-data-table__cell--non-numeric">21 DEC 2017, 15:43</td>
															<td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
															<td class="mdl-data-table__cell--non-numeric">E9873HJKDFHFDE</td>
															<td>0.061BTC 
																
																<span class="crypto-transactions-list__item-price">($445)</span>
															</td>
															<td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
															<td>
																<a href="#">
																	<i class="material-icons">chevron_right</i>
																</a>
															</td>
														</tr>
														<tr class="crypto-transactions-list__item--details">
															<td colspan="7">
																<div class="mdc-layout-grid">
																	<div class="mdc-layout-grid__inner">
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Version no 
																					
																					<span class="mdc-list-item__meta">1</span>
																				</li>
																				<li class="mdc-list-item">
                              Flag 
																					
																					<span class="mdc-list-item__meta">0001</span>
																				</li>
																				<li class="mdc-list-item">
                              Lock time 
																					
																					<span class="mdc-list-item__meta">135180102155</span>
																				</li>
																			</ul>
																		</div>
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Witnesses 
																					
																					<span class="mdc-list-item__meta">2</span>
																				</li>
																				<li class="mdc-list-item">
                              In-counter 
																					
																					<span class="mdc-list-item__meta">177165211146174175</span>
																				</li>
																				<li class="mdc-list-item">
                              Out-counter 
																					
																					<span class="mdc-list-item__meta">111232135106240239</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
													<tbody class="crypto-transactions-list__separator">
														<tr>
															<td colspan="7"></td>
														</tr>
													</tbody>
													<tbody>
														<tr class="crypto-transactions-list__item">
															<td class="mdl-data-table__cell--icon">
																<i class="fab fa-bitcoin"></i>
															</td>
															<td class="mdl-data-table__cell--non-numeric">20 DEC 2017, 13:47</td>
															<td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
															<td class="mdl-data-table__cell--non-numeric">E9873HJKDFMFGV</td>
															<td>0.061BTC 
																
																<span class="crypto-transactions-list__item-price">($478)</span>
															</td>
															<td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--rejected">Rejected</td>
															<td>
																<a href="#">
																	<i class="material-icons">chevron_right</i>
																</a>
															</td>
														</tr>
														<tr class="crypto-transactions-list__item--details">
															<td colspan="7">
																<div class="mdc-layout-grid">
																	<div class="mdc-layout-grid__inner">
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Version no 
																					
																					<span class="mdc-list-item__meta">1</span>
																				</li>
																				<li class="mdc-list-item">
                              Flag 
																					
																					<span class="mdc-list-item__meta">0001</span>
																				</li>
																				<li class="mdc-list-item">
                              Lock time 
																					
																					<span class="mdc-list-item__meta">135180102155</span>
																				</li>
																			</ul>
																		</div>
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Witnesses 
																					
																					<span class="mdc-list-item__meta">2</span>
																				</li>
																				<li class="mdc-list-item">
                              In-counter 
																					
																					<span class="mdc-list-item__meta">177165211146174175</span>
																				</li>
																				<li class="mdc-list-item">
                              Out-counter 
																					
																					<span class="mdc-list-item__meta">111232135106240239</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
													<tbody class="crypto-transactions-list__separator">
														<tr>
															<td colspan="7"></td>
														</tr>
													</tbody>
													<tbody>
														<tr class="crypto-transactions-list__item">
															<td class="mdl-data-table__cell--icon">
																<i class="fas fa-euro-sign"></i>
															</td>
															<td class="mdl-data-table__cell--non-numeric">28 NOV 2017, 11:31</td>
															<td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
															<td class="mdl-data-table__cell--non-numeric">E9873HJKDFWMSO</td>
															<td>0.061BTC 
																
																<span class="crypto-transactions-list__item-price">($445)</span>
															</td>
															<td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
															<td>
																<a href="#">
																	<i class="material-icons">chevron_right</i>
																</a>
															</td>
														</tr>
														<tr class="crypto-transactions-list__item--details">
															<td colspan="7">
																<div class="mdc-layout-grid">
																	<div class="mdc-layout-grid__inner">
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Version no 
																					
																					<span class="mdc-list-item__meta">1</span>
																				</li>
																				<li class="mdc-list-item">
                              Flag 
																					
																					<span class="mdc-list-item__meta">0001</span>
																				</li>
																				<li class="mdc-list-item">
                              Lock time 
																					
																					<span class="mdc-list-item__meta">135180102155</span>
																				</li>
																			</ul>
																		</div>
																		<div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
																			<ul class="mdc-list mdc-list--dense demo-list">
																				<li class="mdc-list-item">
                              Witnesses 
																					
																					<span class="mdc-list-item__meta">2</span>
																				</li>
																				<li class="mdc-list-item">
                              In-counter 
																					
																					<span class="mdc-list-item__meta">177165211146174175</span>
																				</li>
																				<li class="mdc-list-item">
                              Out-counter 
																					
																					<span class="mdc-list-item__meta">111232135106240239</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</main>
				</div>.
				
						<!-- END Page Content -->
@endsection
@section('js_after')
        
						
						<script src="{{ asset('js/pages/wallet.js') }}" type="text/javascript"></script>
@endsection