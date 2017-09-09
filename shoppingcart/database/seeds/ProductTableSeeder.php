<?php

use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new App\Product([
        			'images'=>'http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-so-mi-nu-tay-phoi-ren-dinh-hat-f138-hinh-0-luatsutunhan-300x300.jpg',
        			'title'=>'Áo Sơ Mi Nữ Tay Phối Ren Đính Hạt F138',
        			'description'=>'+ Chất liệu: Voan
									+ Màu sắc: Trắng
									+ Kích thước: thích hợp cho nữ từ 43 – 53kg
									+ Xuất xứ : Hàng nhập khẩu.
									Mã sản phẩm: F138
									Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.',
					'price' =>'12000'
        	]);
        $product->save();
        $product = new \APP\Product([
        			'images'=>'http://www.luatsutunhan.com/thoi-trang/files/2016/10/ao-khoac-nam-da-cai-nut-f20-hinh-0-luatsutunhan.jpg',
        			'title'=>'Áo Khoác Nam Da Cài Nút F20',
        			'description'=>'+ Áo khoác da nam cao cấp được thiết kế với kiểu dáng trẻ trung, nam tính, tạo vẻ ngoài sành điệu và cuốn hút cho phái mạnh.
						+ Kiểu áo cổ cao, tay dài, kéo khóa tiện dùng cùng các chi tiết đính nút, phối túi đầy cá tính, phù hợp với sở thích của nhiều người.
						+Chất liệu da cao cấp, bề mặt bóng đẹp, tạo form dáng chuẩn, mạnh mẽ.
						+ Màu sắc : Đen,nâu đậm, nâu nhạt – nam tính, bạn có thể biến hóa với nhiều trang phục khác nhau.
						+ Size : M, L, XL

						Mã sản phẩm: F20
						Xuất xứ: Việt Nam
						Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.',
					'price' =>'25000'
        	]);
        $product->save();
        $product = new \APP\Product([
        			'images'=>'http://www.luatsutunhan.com/thoi-trang/files/2016/10/tui-xach-nu-khoa-cai-ngang-txt48-hinh-0-luatsutunhan.jpg',
        			'title'=>'Túi Xách Nữ Khóa Cài Ngang TXT48',
        			'description'=>'+ Chất liệu: giả da cao cấp
					+ Màu sắc: Đen, Đỏ và Trắng
					+ Kích thước: ngang 19,5cm x cao 13cm x đáy 6,5cm.
					+ Xuất xứ : Hàng nhập khẩu
					Mã sản phẩm: TXT48
					Xuất xứ: Việt Nam
					Lưu ý: Sản phẩm thật có thể chênh lệch màu sắc khoảng 10% so với hình ảnh trên deal do sự khác nhau về độ phân giải của từng loại màn hình.',
					'price' =>'100000'
        	]);
        $product->save();
    }
}
