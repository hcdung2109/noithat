<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Seed sample featured projects.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Căn hộ Vinhomes Modern Luxury',
                'slug' => 'can-ho-vinhomes-modern-luxury',
                'location' => 'TP.HCM',
                'style' => 'Modern Luxury',
                'area' => '75m²',
                'duration' => '45 ngày',
                'thumbnail_url' => 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_featured' => true,
                'excerpt' => 'Thiết kế căn hộ 2 phòng ngủ với tông màu trung tính sang trọng.',
                'content' => 'Dự án tập trung tối ưu ánh sáng tự nhiên, không gian mở giữa phòng khách và bếp, sử dụng vật liệu cao cấp để tăng chiều sâu thẩm mỹ.',
            ],
            [
                'title' => 'Nhà phố Family Home',
                'slug' => 'nha-pho-family-home-scandinavian',
                'location' => 'Thủ Đức, TP.HCM',
                'style' => 'Scandinavian ấm áp',
                'area' => '120m²',
                'duration' => '60 ngày',
                'thumbnail_url' => 'https://images.pexels.com/photos/6587898/pexels-photo-6587898.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_featured' => true,
                'excerpt' => 'Không gian ấm áp cho gia đình trẻ, ưu tiên vật liệu gỗ và ánh sáng mềm.',
                'content' => 'Bố cục liên thông khách - bếp giúp tăng tương tác gia đình, kết hợp hệ tủ âm tường để tối ưu lưu trữ và giữ tổng thể gọn gàng.',
            ],
            [
                'title' => 'Văn phòng Creative Studio',
                'slug' => 'van-phong-creative-studio-open-space',
                'location' => 'Quận 1, TP.HCM',
                'style' => 'Open Space hiện đại',
                'area' => '180m²',
                'duration' => '40 ngày',
                'thumbnail_url' => 'https://images.pexels.com/photos/2747901/pexels-photo-2747901.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_featured' => true,
                'excerpt' => 'Không gian làm việc mở, linh hoạt cho đội ngũ sáng tạo.',
                'content' => 'Thiết kế ưu tiên công năng cộng tác, phân vùng mềm bằng kính và cây xanh, tạo môi trường làm việc truyền cảm hứng.',
            ],
            [
                'title' => 'Căn hộ City View',
                'slug' => 'can-ho-city-view-contemporary',
                'location' => 'Hà Nội',
                'style' => 'Contemporary',
                'area' => '90m²',
                'duration' => '55 ngày',
                'thumbnail_url' => 'https://images.pexels.com/photos/3965515/pexels-photo-3965515.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_featured' => true,
                'excerpt' => 'Căn hộ hướng thành phố với phong cách đương đại tinh gọn.',
                'content' => 'Sử dụng bảng màu trung tính kết hợp điểm nhấn kim loại, tối ưu khu vực bếp và logia để tăng trải nghiệm sử dụng hằng ngày.',
            ],
            [
                'title' => 'Phòng ngủ Minimal Cozy',
                'slug' => 'phong-ngu-minimal-cozy',
                'location' => 'Bình Thạnh, TP.HCM',
                'style' => 'Minimalism ấm áp',
                'area' => '20m²',
                'duration' => '25 ngày',
                'thumbnail_url' => 'https://images.pexels.com/photos/2528118/pexels-photo-2528118.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_featured' => true,
                'excerpt' => 'Thiết kế phòng ngủ tối giản, tăng cảm giác thư giãn.',
                'content' => 'Giải pháp lưu trữ thông minh kết hợp ánh sáng gián tiếp và vật liệu thân thiện, mang lại sự thoải mái tối đa cho người dùng.',
            ],
            [
                'title' => 'Reception Creative Hub',
                'slug' => 'reception-creative-hub',
                'location' => 'Quận 7, TP.HCM',
                'style' => 'Brand Accent',
                'area' => '40m²',
                'duration' => '30 ngày',
                'thumbnail_url' => 'https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_featured' => true,
                'excerpt' => 'Khu lễ tân nhấn mạnh nhận diện thương hiệu, hiện đại và chuyên nghiệp.',
                'content' => 'Thiết kế tập trung vào điểm chạm đầu tiên của khách hàng với logo backlit, quầy tiếp tân bo cong và hệ chiếu sáng tạo hiệu ứng sang trọng.',
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
