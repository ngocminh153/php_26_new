<?php require_once('./views/backend/includes/header.php')?>
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Danh sách bài viết</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Tên</th>
                              <th scope="col">Mô tả</th>
                              <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $item){ ?>
            
                                <tr>
                                    <td><?php echo $item['id']?></td>
                                    <td><?php echo $item['title']?></td>
                                    <!-- <td>
                                        <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                                    </td> -->
                                    <td><?php echo $item['description']?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Detail</a>
                                        <a href="index.php?mod=category&act=edit&id=<?php echo $item['id'] ?>" class="btn btn-success">Edit</a>
                                        <a href="category_delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- Content Row -->
                    
                </div>
                <!-- /.container-fluid -->
<?php require_once('views/backend/includes/footer.php')?>
