<div class="container">
<div class="card"><br>
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">

    </div>
    <div class="col">

    </div>
    <div class="col">
      <div class="p-3 border bg-light">
      <div class="card">
            <?php
                        $teac = $conn->prepare('SELECT * From teacher where position = 1');
                        $teac->execute();
                        $teacs = $teac->fetch();

                        if (!$teacs) {
                        echo "ยังไม่มีข้อมูลผู้อำนวยการ";
                        } 
            ?>
  
                <div class="card-body text-center">
                <img src="admin/upload/<?php echo $teacs['img_teac']; ?>" alt="" class="card-img-top" alt="...">
                <a style="font-size: 12px;"><?php echo $teacs['name'];?></a><br>
                <a><?php
                                if($teacs['position']==1){
                                echo 'ผู้อำนวยการโรงเรียน';
                                }elseif($teacs['position']==2){
                                echo 'รองผู้อำนวยการโรงเรียน';	
                                }
                                elseif($teacs['position']==3){
                                echo 'ครูชำนาญการ';	
                                }
                                elseif($teacs['position']==4){
                                echo 'ครูชำนาญการพิเศษ';	
                                }
                                elseif($teacs['position']==5){
                                echo 'ครูเชี่ยวชาญ';	
                                }
                                elseif($teacs['position']==6){
                                echo 'ครู';	
                                }
                                elseif($teacs['position']==7){
                                echo 'ครูผู้ช่วย';	
                                }
                                elseif($teacs['position']==8){
                                echo 'ครูอัตราจ้าง';	
                                }
                                ?></a>
                </div>

            </div>
      </div>
    </div>
    <div class="col">

    </div>
    <div class="col">

    </div>

    <div class="col">

    </div>
            <?php
                        $teac01 = $conn->prepare('SELECT * From teacher where position != 1');
                        $teac01->execute();
                        $teacs01 = $teac01->fetchAll();

                        if (!$teacs01) {
                        echo "ยังไม่มีข้อมูลผู้อำนวยการ";
                        }
                        foreach ($teacs01 as $tea):  
            ?>

    <div class="col">
      <div class="p-3 border bg-light">
      <div class="card">
        <div class="card-body text-center">
                <img src="admin/upload/<?php echo $tea['img_teac']; ?>" alt="" class="card-img-top" alt="...">
                <a style="font-size: 12px;"><?php echo $tea['name'];?></a><br>
                <a><?php
                                if($tea['position']==1){
                                echo 'ผู้อำนวยการโรงเรียน';
                                }elseif($tea['position']==2){
                                echo 'รองผู้อำนวยการโรงเรียน';	
                                }
                                elseif($tea['position']==3){
                                echo 'ครูชำนาญการ';	
                                }
                                elseif($tea['position']==4){
                                echo 'ครูชำนาญการพิเศษ';	
                                }
                                elseif($tea['position']==5){
                                echo 'ครูเชี่ยวชาญ';	
                                }
                                elseif($tea['position']==6){
                                echo 'ครู';	
                                }
                                elseif($tea['position']==7){
                                echo 'ครูผู้ช่วย';	
                                }
                                elseif($tea['position']==8){
                                echo 'ครูอัตราจ้าง';	
                                }
                                ?></a>
                </div></div>
    </div>
    
    
  </div>
  <?php endforeach; ?>
  </div>

  <br>
</div>
</div>