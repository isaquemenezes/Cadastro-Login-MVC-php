<?php \Classes\ClassLayout::setHead('Homepage','Essa é a home page do nosso site.','Thiago Arteweb'); ?>

    <h1>Sistema de Cadastro e Login</h1>
    <header>
        <nav>
            <li><a href="<?php echo DIRPAGE.'Cadastro'; ?>">Faça Seu Cadastro</a></li>
            <li><a href="<?php echo DIRPAGE.'login'; ?>">Login</a></li>
        </nav>
    </header>

<?php \Classes\ClassLayout::setFooter(); ?>