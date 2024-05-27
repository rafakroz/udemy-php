<?php

    include_once("templates/header.php");

    if(isset($_GET['id'])){  // Checar se veio algo no GET

        $postId = $_GET['id']; // variável receberá o Id

        $currentPost;

            foreach ($posts as $post) {

                if ($post['id'] == $postId)  // Se o post for igual ao postId, da url

                $currentPost = $post;

            }

    }

?>

    <main id="post-container">

        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>

            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde veniam tempora ipsa voluptatem aperiam sit, cumque, blanditiis fuga temporibus asperiores consequatur rem iusto reiciendis ipsam quia error porro, nostrum delectus?
            Laudantium quaerat totam quod nisi. Illo eos quis reiciendis, aspernatur neque nobis tempora suscipit commodi voluptate optio quae aliquid cum, repellendus distinctio qui id, possimus inventore ex voluptas accusamus. Animi?
            Praesentium libero dolores explicabo laboriosam veritatis magni iure, ea alias voluptatum est qui consectetur earum sit nemo impedit voluptate ab id laborum delectus eaque blanditiis dolor rem? Autem, placeat voluptate?
            Odit qui pariatur ea ullam, cupiditate perferendis veritatis. Dolor, eius maxime error veritatis commodi exercitationem quidem doloribus nisi provident inventore, nobis alias ab eaque, totam temporibus soluta voluptates hic odio!
            Quae ratione quibusdam exercitationem ex quos, totam impedit qui rerum in maxime odio numquam ducimus! Reiciendis nesciunt, ea at error accusantium cum odit provident corrupti aperiam quia ab unde iure?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde veniam tempora ipsa voluptatem aperiam sit, cumque, blanditiis fuga temporibus asperiores consequatur rem iusto reiciendis ipsam quia error porro, nostrum delectus?
            Laudantium quaerat totam quod nisi. Illo eos quis reiciendis, aspernatur neque nobis tempora suscipit commodi voluptate optio quae aliquid cum, repellendus distinctio qui id, possimus inventore ex voluptas accusamus. Animi?
            Praesentium libero dolores explicabo laboriosam veritatis magni iure, ea alias voluptatum est qui consectetur earum sit nemo impedit voluptate ab id laborum delectus eaque blanditiis dolor rem? Autem, placeat voluptate?
            Odit qui pariatur ea ullam, cupiditate perferendis veritatis. Dolor, eius maxime error veritatis commodi exercitationem quidem doloribus nisi provident inventore, nobis alias ab eaque, totam temporibus soluta voluptates hic odio!
            Quae ratione quibusdam exercitationem ex quos, totam impedit qui rerum in maxime odio numquam ducimus! Reiciendis nesciunt, ea at error accusantium cum odit provident corrupti aperiam quia ab unde iure?</p>

        </div>

        <aside id="nav-container">

            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag) : ?>
                    <li>
                        <a href="#"><?= $tag ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category) : ?>
                    <li>
                        <a href="#"><?= $category ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </aside>

    </main>



<?php

    include_once("templates/footer.php");

?>