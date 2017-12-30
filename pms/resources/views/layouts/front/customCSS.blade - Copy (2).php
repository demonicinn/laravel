<style>
	#left-sidebar .side-nav li.main.active,
	#left-sidebar .side-nav li.main.in {
	background-color: #f2f2f2;
	}
	#left-sidebar .side-nav li.active a.collapse,
	#left-sidebar ul.drop-menu li.active a,
	#left-sidebar ul.drop-menu li a:hover {
	color: #304ffe;
	}
	nav.breadcrumb a {
	color: #304ffe;
	font-size: 13px;
	font-weight: 500;
	text-transform: capitalize;
	}
	nav.breadcrumb a.active {
	color: #484848;
	}
	#left-sidebar .side-nav li.main .drop-menu {
	background-color: #fbfbfb;
	border-bottom: 1px solid #f3f2f2;
	}
	.breadcrumb {
	margin-bottom: 15px;
	}
	.btn.space-preview {
	line-height: 0;
	}
	table.table.table-hover thead th {
	font-weight: bold;
	}
	.active-tr {
	background-color: #f2f2f2;
	}
	#alert.success {
	color: green;
	margin: 10px 0;
	font-size: 15px;
	}
	#alert.danger {
	color: red;
	margin: 10px 0;
	font-size: 15px;
	}
	label {
	font-weight: bold;
	}
	p.valid {
	margin-bottom: 10px;
	}
	.dropdown-menu.pull-right {
	right: 0;
	left: auto;
	}
	a.dropdown-item.active {
	background-color: #f2f2f2;
	}
	#header #brand {
	background-color: #00044c;
	height: 54px;
	}
	.header-toggle {
	background: #1c2260;
	}
	#header .header-toggle .header-content .right .nav li a {
	color: #fff;
	}
	.hamburger.bg-brand {
	background-color: #00044c;
	height: 54px;
	}
	
	
	.filter {
	margin-top: 20px;
	}
	.pagination {
	display: inline-block;
	float: right;
	}
	
	.pagination li a {
	padding: 6px 10px;
	background-color: #fff;
	border: 1px solid #ddd;
	}
	
	.pagination li {
	display: inline-block;
	}
	
	.pagination .active span {
	background-color: #1c2260;
	padding: 6px 10px;
	color: #fff;
	border: 1px solid #1c2260;
	cursor: not-allowed;
	}
	
	.pagination li a:hover {
	background-color: #1c2260;
	color: #fff;
	border: 1px solid #1c2260;
	}
	
	.pagination .disabled span {
	padding: 6px 10px;
	background-color: #fff;
	border: 1px solid #ddd;
	cursor: not-allowed;
	}
	.hamburger .hamburger-box .hamburger-inner, .hamburger .hamburger-box .hamburger-inner:after {
	background-color: #fff;
	}
	.user-image {
	background: red;
	padding: 6px 8px;
	border-radius: 50%;
	margin-right: 11px;
	}
	
	#header .header-toggle .header-content .right .nav li a:hover {
	color: #fff;
	}
	.inbox-content-header h5 {
	width: 100%;
	}
	.no-data {
	font-size: 20px;
	font-weight: 600;
	text-align: center;
	margin-top: 15px;
	display: inline-block;
	}
	.no-data-come {
	text-align: center;
	}
	
	.inbox-wrapper .inbox-content .table-inbox td .fa {
	color: #000;
	}
	.inbox-wrapper .inbox-content .table-inbox td .fa:hover {
	color: red;
	}
	.inbox-wrapper .inbox-content .table-inbox .favorite .fa, .favorite .fa-star {
	color: #ff4700;
	}
	.inbox-sidebar-header h5 {
	border-bottom: 1px solid #dddddd;
	padding-bottom: 15px;
	}
	

	
	.reply-send .form-group .attach_file_div {
	position: absolute;
	top: 5px;
	width: 25px;
	z-index: 9;
	right: 29px;
	height: 25px;
	cursor: pointer;
	text-align: center;
	}
	.reply-send .form-group textarea {
	padding-right: 45px;
	resize:none;
	background-color: #f2f2f2;
	}
	.reply-send .form-group textarea:focus{
	border-color:transparent;
	}
	
	.reply-send {
	margin-top: 15px;
	width: 100%;
	}
	.reply-send  .buttons {
	margin-top: 15px;
	}
	
	
	
	
	.direct-chat-msg {
	margin-bottom: 10px;
	}
	.direct-chat-info {
	display: block;
	margin-bottom: 2px;
	font-size: 12px;
	}
	.direct-chat-name {
	font-weight: 600;
	}
	.direct-chat-timestamp {
	color: #999;
	}
	.right .direct-chat-img {
	float: right;
	}
	.direct-chat-img {
	border-radius: 50%;
	float: left;
	width: 40px;
	height: 40px;
	}
	
	.clearfix::after {
	display: inline-block;
	content: "";
	clear: both;
	}
	
	.direct-chat-msg {
	width: 100%;
	margin: 0 auto;
	max-width: 85%;
	float: left;
	padding-top: 15px;
	}
	
	.direct-chat-msg.right {
	width: 100%;
	margin: 0 auto;
	max-width: 85%;
	float: right;
	padding-top: 15px;
	}
	
	.direct-chat-timestamp.pull-left {
	font-size: 11px;
	text-align: right;
	width: 100%;
	}
	
	.msgouter_box {	
	position: relative;
	padding: 5px 10px;
	background: #00044c;
	float: left;
	box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);
	margin: 0px 0 0 10px;
	color: #fff;
	width: 85%;
	}
	
	.right .msgouter_box
	{	
	position: relative;
	padding: 5px 10px;
	background: #ffffff;
	float: left;
	margin: 0px 10px 0px 0px;
	box-shadow: -2px 2px 3px rgba(0, 0, 0, 0.5);
	color: #00044c;
	width: 85%;	
	}
	
	.msgouter_box:before {	
	background: rgba(247, 148, 148, 0);
	content: "";
	position: absolute;
	top: 0px;
	right: 0px;
	left: -9px;
	width: 0;
	height: 0;
	border: 9px solid #00044c;
	border-left-color: transparent;
	border-bottom-color: transparent;
	border-right-color: transparent;
	}
	.right .msgouter_box:before {	
	background: rgba(247, 148, 148, 0);
	content: "";
	position: absolute;
	top: 0px;
	right: -9px;
	width: 0;
	height: 0;
	left: auto;
	border: 9px solid #ffffff;
	border-left-color: transparent;
	border-bottom-color: transparent;
	border-right-color: transparent;
	}
	
	.view-msg-rply {
	background-color: #00044c;
	}
	
	
	.reply-send  .buttons .btn.btn-primary {
	color: #fff;
	background-color: #1c2260;
	border-color: #ffffff;
	border: 1px solid #ffffff;
	}
	
	.reply-send  .buttons .btn.btn-primary:hover{
	background-color: #00044c;
	
	}
	
</style>


<style>
	
	.notification_timeline ul:before {
	content: '';
	position: absolute;
	top: 35px;
	bottom: 8px;
	width: 4px;
	background: #ddd;
	left: 34px;
	margin: 0;
	border-radius: 2px;
	}
	.notification_timeline ul {
	list-style-type: none;
	margin: 0;
	padding-left: 64px;
	}
	
	
	
	.timeline_txt{
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	border-radius: 3px;
	margin-top: 0;
	background: #fff;
	color: #444;
	padding: 10px;
	float: left;
	width: 100%;
	position: relative;
	}
	
	i.fa.fa-envelope.bg-blue {
	width: 30px;
	height: 30px;
	font-size: 15px;
	line-height: 30px;
	position: absolute;
	color: #fff;
	background: #0055ff;
	border-radius: 50%;
	text-align: center;
	left: -43px;
	top: 0px;
	}
	.timeline_date {
	position: absolute;
	top: 13px;
	right: 11px;
	color: #a5a5a5;
	font-size: 11px;
	}
	.timeline_txt p {
	padding-right: 55px;
	}
	.notification_timeline ul li {
	margin-bottom: 20px;
	width: 100%;
	float: left;
	position: relative;
	}
	
	.timeline_date_outer {
	width: 100%;
	float: left;
	margin: 0 auto;
	padding-bottom:10px;
	}
	.timeline_date_outer p {
	float: left;
	padding: 15px;
	color: #fff;
	background-color: #000;
	border-radius: 5px;
	font-size: 13px;
	font-weight: 600;
	padding: 7px;
	display: inline-block;
	}
	.notification_timeline ul li:last-child {
	margin-bottom: 0px;
	}
	
	.notification_timeline {
	position: relative;
	float: left;
	}
	
	.inbox-wrapper .attachment {
	display: block;
	}
	
	.inbox-wrapper .attachment a{
	color: #fff;
	background-color: #304ffe;
	border-color: #304ffe;
	border: 1px solid #304ffe;
	width: auto;
	padding: 5px 11px;
	margin: 4px 0;
	}
	.inner_attach input[type="file"] {
	position: absolute;
	width: 100%;
	left: 0;
	opacity: 0;
	cursor: pointer;
	}
	.inner_attach {
	position: relative;
	}
	.upload_files .stats-style-2 .stats-body {
	padding: 3px 2px;
	border-radius: 0;
	margin-bottom: 5px;
	display: inline-block;
	width: 100%;
	}
	.upload_files #alert.success, .upload_files #alert.danger {
	margin-top: 0;
	display: inline-block;
	}
	
	.upload_files .file-path-wrapper {
	width: 100%;
	}
	
	.stats-body span i {
	float: right;
	margin-top: 4px;
	margin-right: 5px;
	}
	
	.direct-chat-img {
    color: #fff;
    background: red;
    padding: 8px 11px;
    border-radius: 50%;
    margin-right: 11px;
	}
	
	.attachfiles a {
    color: red;
		font-size: 13px;
	}
	
	.cust-slide .inbox-sidebar
	{
	position:fixed;
	overflow: auto;
	}
	
	 .cust-slide .inbox-toggle.tasks .inbox-sidebar.mobile-inbox {
    position: relative;
}

	
	
</style>

