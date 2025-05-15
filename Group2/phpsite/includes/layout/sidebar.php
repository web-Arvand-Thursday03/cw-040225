<?php

// var_dump($categories);

?>
<div class="col-lg-4">
    <!-- Sesrch Section -->
    <div class="card">
        <p class="fw-bold fs-6 card-header text-center">جستجو در سایت</p>
        <div class="card-body">
            <form action="search.html">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="جستجو ..." />
                    <button class="btn btn-secondary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="card mt-4">
        <div class="fw-bold fs-6 card-header text-center">دسته بندی ها</div>
        <ul class="list-group list-group-flush p-0">
            <?php foreach ($categories as $category): ?>
                <li class="list-group-item">
                    <a class="link-body-emphasis text-decoration-none" href="index.php?id=<?= $category['id'] ?>"><?= $category['title'] ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <!-- Subscribe Section -->
    <div class="card mt-4">
        <p class="fw-bold fs-6 card-header text-center">عضویت در خبرنامه</p>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">نام</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">رایانامه</label>
                    <input type="email" class="form-control" />
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-secondary">ارسال</button>
                </div>
            </form>
        </div>
    </div>

    <!-- About Section -->
    <div class="card mt-4">
        <p class="fw-bold fs-6 card-header text-center">درباره ما</p>
        <div class="card-body">
            <p class="text-justify">
                وظیفه اصلی یک مدرس در حوزه فناوری، کاهش زمان و انرژی لازم برای موفق شدن دانش پذیرانش است. برای رسیدن به این مهم باید از مشاور و مدرسی آموزش دید که یک متخصص
                واقعی با تجربه‌های بزرگ در شرکت‌های مطرح باشد و چالش‌های متفاوتی را در نرم افزارهای سطح بالا به صورت واقعی تجربه کرده باشد. افتخار می‌کنیم با مدرسینی همکاری
                داریم که متخصص و به شدت با تجربه هستند و در بزرگترین شرکت‌های نرم افزاری ایران تجربه کار جدی داشته اشته اند.
            </p>
        </div>
    </div>
</div>