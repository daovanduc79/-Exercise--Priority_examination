# -Exercise--Priority_examination
[Bài tập] Ưu tiên khám bệnh
Mục đích
Luyện tập sử dụng cấu trúc Queue.

Nội dung
Trong quá trình hoạt động hàng đợi bình thường, khi một phần tử bị xóa khỏi hàng đợi, phần tử đó luôn là phần tử đầu tiên đã được chèn vào hàng đợi. Tuy nhiên, có một số ứng dụng của hàng đợi, yêu cầu rằng các phần tử được gỡ bỏ theo một trật tự khác với việc vào trước, ra trước. Khi chúng ta cần mô phỏng ứng dụng như vậy, chúng ta cần phải tạo một cấu trúc dữ liệu được gọi là hàng đợi ưu tiên.

Hàng đợi ưu tiên là một loại hàng đợi trong đó các phần tử được loại bỏ khỏi hàng đợi dựa trên một ràng buộc ưu tiên. Ví dụ, phòng chờ tại khoa cấp cứu của bệnh viện (ED) hoạt động sử dụng hàng đợi ưu tiên. Khi một bệnh nhân vào ED, người đó sẽ được y tá khám. Công việc của y tá là đánh giá mức độ nghiêm trọng của tình trạng bệnh nhân và chỉ định bệnh nhân một mã. Bệnh nhân có mã ưu tiên cao được nhìn thấy trước bệnh nhân có mã ưu tiên thấp hơn và bệnh nhân có cùng mã ưu tiên được nhìn thấy trên cơ sở người đến trước.

Hướng dẫn
Hãy bắt đầu xây dựng một hệ thống hàng đợi ưu tiên bằng cách định nghĩa một đối tượng sẽ lưu trữ các phần tử của hàng đợi. Lớp Patient có 2 thuộc tính:

$name - tên của bệnh nhân
$code - mã của bệnh nhân
Giá trị cho mã sẽ là một số nguyên đại diện cho mức độ ưu tiên, hoặc mức độ nghiêm trọng của bệnh nhân.
Bây giờ chúng ta cần phải xác định lại hàm dequeue() để loại bỏ các phần tử trong hàng đợi với mức ưu tiên cao nhất. Chúng ta xác định phần tử ưu tiên cao nhất là phần tử có mã thấp nhất.

Hãy sử dụng hàm __toString() để hiển thị danh sách bệnh nhân, giúp cho việc quan sát các phần tử có trong Queue trở nên dễ dàng hơn.

Mô phỏng kịch bản khám bệnh:

Một bệnh nhân mới tên là Smith, có mã bệnh nhân là 5
Một bệnh nhân mới tên là Jones, có mã bệnh nhân là 4
Một bệnh nhân mới tên là Fehrenbach, có mã bệnh nhân là 6
Một bệnh nhân mới tên là Brown, có mã bệnh nhân là 1
Một bệnh nhân mới tên là Ingram, có mã bệnh nhân là 1
Hiển thị danh sách bệnh nhân
Khám bệnh cho người đầu tiên trong hàng đợi (đã sắp xếp theo độ ưu tiên)
Hiển thị tên của người bệnh đã được khám
Hiển thị danh sách bệnh nhân còn lại
Khám bệnh
Hiển thị tên của người bệnh đã được khám
Hiển thị danh sách bệnh nhân còn lại
Quan sát và giải thích kết quả thực thi của chương trình.