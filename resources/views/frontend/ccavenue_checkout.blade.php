<html>
<head>
<title>CCAvenue: Checkout</title>
</head>
<body>
<center>
<!-- <form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction">  -->
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
  <input type="hidden" name="encRequest" value="{{$encrypted_data}}">
  <input type="hidden" name="access_code" value="{{$access_code}}">
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

