<?php $__env->startSection('content'); ?>
    <h3> Cart Investasi </h3>
    <table id="countit" class="table table-hover">
        <thead>
            <tr>
            <th> Nama User </th>
                <th> Nama Proyek </th>
                <th> Investasi </th>
                <th> Keuntungan </th>
                <th> Nomor Rekening </th>
                <!-- <th> </th> -->
            </tr>
        </thead>
        
        <tbody>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td> <?php echo e($result->name); ?></td>
                <td> <?php echo e($result->nama); ?></td>
                <td> <?php echo e($result->jml_investasi); ?> </td>
                <td class="count-me" > <?php echo e($result->jml_keuntungan); ?> </td>
                <td> <?php echo e($result->no_rekening); ?></td>
                
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <td> </td>
            <td></td>
            <td></td>
            <td>
            <script language="javascript" type="text/javascript">
            var tds = document.getElementById('countit').getElementsByTagName('td');
            var sum = 0;
            for(var i = 0; i < tds.length; i ++) {
                if(tds[i].className == 'count-me') {
                    sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                }
            }
            document.getElementById('countit').innerHTML += '<tr><td>' + sum + '</td><td>total Keuntungan yang ditransfer</td></tr>';
        
        </script>
            
            </td>
            <td></td>

        </tfoot>
    </table>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tampilan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>