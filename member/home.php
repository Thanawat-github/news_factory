<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        
        <!-- datatable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    </head>
    <div class="row">
        <form method="GET" id="form" action="">
			<div style="float:left;" id="hid">

			</div>	
        </form><br>
            <div class="col-sm-12">

                <table id="ex" class="display table table-hover" align="center" width="100%">
                    <thead>
                        <tr class="table-primary">
                            <th width="10%">ลำดับ</th>
                            <th width="20%">ป/ด/ว</th>
                            <th width="50%">ลูกค้า</th>
                            <th width="50%"><center>รายได้(บาท)</center></th>
                        </tr>
                    </thead>

                </table>
            </div>


      
        <br><br>
    </div>
</div>
<script>
            $(document).ready(function() {
            $('#ex').DataTable();
            } );
        </script>
<script>
const dateInput = document.getElementById('date');

dateInput.value = formatDate();

console.log(formatDate());

function padTo2Digits(num) {
  return num.toString().padStart(2, '0');
}

function formatDate(date = new Date()) {
  return [
    date.getFullYear(),
    padTo2Digits(date.getMonth() + 1),
    padTo2Digits(date.getDate()),
  ].join('-');
}
</script>

<script>
const dateInput01 = document.getElementById('date01');

dateInput01.value = formatDate();

console.log(formatDate());

function padTo2Digits(num) {
  return num.toString().padStart(2, '0');
}

function formatDate(date = new Date()) {
  return [
    date.getFullYear(),
    padTo2Digits(date.getMonth() + 1),
    padTo2Digits(date.getDate()),
  ].join('-');
}
</script>