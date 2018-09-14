<html>
<body>
<label class="checkedbox">Do you want to be a user?
                                <input type="checkbox" id="chk" name="chk" onclick="fetch(this.value);">
                                <span class="checkmark"></span>
                            </label>
							<script>
						function fetch(val)
                  {
                  $.ajax({
                  type: 'post',
                  url: 'test.php',
                  data: {
                  get_option1: $("#chk").val()
                  },
                  success: function (response) {
                  document.getElementById("sno").innerHTML=response;
                  }
                  });
                  }
                </script>
				                      <input type="text" id="sno" name="sno">

							</body>
							</html>