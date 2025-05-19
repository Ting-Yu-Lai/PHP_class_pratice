    <nav>
        <ul>
            <li><a class="<?=($page=='main') ? 'activate':'';?>" href="index.php">首頁</a></li>
            <li><a class="<?=($page=='list') ? 'activate':'';?>" href="index.php?page=list">學生列表</a></li>
            <li><a class="<?=($page=='new') ? 'activate':'';?>" href="index.php?page=new">新增學生</a></li>
            <li><a class="<?=($page=='query') ? 'activate':'';?>" href="index.php?page=query">查詢學生</a></li>
            <li><a class="<?=($page=='about') ? 'activate':'';?>" href="index.php?page=about">關於</a></li>
        </ul>
    </nav>