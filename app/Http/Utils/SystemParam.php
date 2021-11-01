<?php
namespace App\Http\Utils;

class SystemParam
{
    const status_success = 1;
    const status_error = 0;
    const code_success = 200;
    const code_no_content = 204;
    const code_not_found = 404;
    const code_error_validate = 422;
    const code_error_server = 501;
    const code_invaild = 401;
    const register_recruit_success = "Đăng ký thành công! Vui lòng kiểm tra lại email để xác nhận đăng ký";
    const register_success = "Đăng ký thành công! Vui lòng kiểm tra điện thoại để xác nhận đăng ký";
    const turn_over = "Bạn cần chờ thêm thời gian để đến lượt quay tiếp theo!";
    const lack_of_point = "Bạn không đủ xu để đổi thẻ!";
    const deal_card_success = "Đổi thẻ thành công!";
    const card_not_found = "Thẻ này không tồn tại!";
    const update_phone_success = "Cập nhật số điện thoại thành công!";
    const update_is_notify_success = "Cập nhật trạng thái thông báo thành công!";
    const not_province_id = "Vui lòng chọn tỉnh thành!";
    const not_utility_id = "Vui lòng chọn tiện ích!";
    const update_province_success = "Cập nhật tỉnh thành thành công!";
    const update_utility_success = "Cập nhật tiện ích thành công!";
    const login_success = "Đăng nhập thành công!";
    const message_error_in_catch = "Hệ thống đang bảo trì!";
    const logout_success = "Đăng xuất thành công!";
    const user_not_found = "Người dùng không tồn tại!";
    const admin_not_found = "Quản trị không tồn tại!";
    const token_expired = "Bạn đã hết hạn đăng nhập!";
    const token_invalid = "Token không hợp lệ!";
    const token_absent = "token absent!";
    const provider_facebook = "facebook";
    const provider_google = "google";
    const message_login_user_not_found = "Số điện thoại này chưa đăng ký tài khoản. Bạn cần đăng ký để sử dụng dịch vụ";
    const message_login_error = "Mật khẩu không hợp lệ, vui lòng nhập lại mật khẩu";
    const message_login_error_status = "Tài khoản của bạn chưa được kích hoạt!";
    const message_account_locked = "Tài khoản của bạn đã bị khóa!";
    const message_account_delete = "Tài khoản của bạn đã bị xóa!";
    const update_user_success = "Cập nhật tài khoản thành công!";
    const update_avatar_success = "Cập nhật ảnh đại diện thành công!";
    const update_password_success = "Đổi mật khẩu thành công!";
    const type_game = 1;
    const type_video = 2;
    const type_deal_card = 1;
    const number_of_bonus_spins_default = 1;
    const create_apartment_success = "Tạo căn hộ thành công";
    const create_rent_apartment_success = "Thuê căn hộ thành công";
    const apartment_not_found = "Không tìm thấy căn hộ";
    const create_resident_apartment_success = "Thêm người ở thành công";
    const rent_apartment_not_found = "Không tìm thấy căn hộ đã thuê";
    const resident_apartment_not_found = "Không tìm thấy người ở";
    const cancel_resident_apartment_success = "Hủy người ở thành công";
    const cancel_rent_apartment_success = "Hủy thuê căn hộ thành công";
    const create_electrycity_water_apartment_success = "Gửi yêu cầu thanh toán tiền điện nước thành công";
    const apartment_owner_not_found = "Bạn không phải là chủ căn hộ";
    const create_booking_success = "Đặt phòng thành công!";
    const create_review_success = "Đánh giá thành công!";
    const booking_not_found = "Không tìm thấy mã đặt phòng!";
    const money_not_found = "Không tìm thấy tiền cần nạp!";
    const review_not_found = "Không tìm thấy đánh giá!";
    const news_not_found = "Không tìm thấy bài viết tin tức!";
    const delete_review_success = "Xóa đánh giá thành công!";
    const booking_unfinished = "Bạn chưa hoàn thành xong kỳ nghỉ!";
    const message_error_server = "Đã có lỗi xảy ra!";
    const invalid_data = 'Sai định dạng dữ liệu';
    const error_short_point = 'Số điểm của bạn không đủ để thực hiện đổi món quà này!';
    const change_gift_success = 'Đổi quà thành công!';
    const error_gift_not_found = 'Không tìm thấy quà tặng!';
    const error_lender_not_found = 'Không tìm thấy người cho vay!';
    const error_guarantee_not_found = 'Không tìm thấy người bảo lãnh!';
    const error_duplicate_user_lender_and_guarantee = 'Người cho vay và người bảo lãnh không được trùng nhau!';
    const error_duplicate_user_lender_and_user = 'Bạn không được chọn chính bạn làm người cho vay!';
    const error_duplicate_user_and_guarantee = 'Bạn không được chọn chính bạn làm người bảo lãnh!';
    const create_Borrowers_success = 'Yêu cầu vay vốn thành công!';
    const error_lender_not_enough_money = 'Người cho vay không đủ tiền để cho bạn vay!';
    const error_guarantee_not_enough_money = 'Người bảo lãnh không đủ tiền để bảo lãnh cho bạn!';
    const error_borrower_not_found = 'Không tìm thấy lần vay vốn!';
    const error_user_not_enough_money = 'Không được phép trả dưới mức tiền trả hàng tháng!';
    const create_PayMonthly_success = 'Giao dịch thành công!';
    const make_lend_contract = 'Tạo hợp đồng thành công!';
    const error_borrower_already_exist = 'Đã tồn tại hợp đồng của lần vay vốn này!';
    const register_lender_success = 'Đăng ký làm người cho vay thành công!';
    const register_guarantee_success = 'Đăng ký làm người bảo lãnh thành công!';
    const loaded_money_success = 'Nạp tiền thành công!';
    const stop_success = 'Tạm dừng thành công!';
    const active_success = 'Kích hoạt thành công!';
    const confirm_success = 'Xác nhận thành công!';
    const cancel_success = 'Hủy thành công!';
    const create_success = 'Thêm mới thành công!';
    const update_success = 'Cập nhật thành công!';
    const delete_success = 'Xóa thành công!';
    const title_notify = 'BestBank';
    const topic_notify = 'a-topic';
    const setting_money_not_found = 'Không tìm thấy bản ghi';
    const error_notify_not_found = 'Không tìm thấy thông báo';
    const service_pack_not_found = 'Không tìm thấy gói dịch vụ';
    const confirm_view_notify_success = 'Xác nhận xem thông báo thành công';
    const status_wait_for_confirmation_with_admin = 0;
    const status_borrower_success = 1;
    const status_wait_for_confirmation_with_lender = 2;
    const status_wait_for_confirmation_with_guarantee = 3;
    const status_borrower_fail = 4;
    const token_not_found = "Vui lòng gửi lên token firebase!";
    const save_token_success = "Lưu token thành công!";
    const error_borrower_not_finish = "Bạn chưa hoàn thành lần vay trước đó!";
    const error_setting_point_not_found = "Không tìm thấy bản ghi cài đặt điểm tặng!";
    const error_phone_already_exist = "Số điện thoại đã tồn tại trên hệ thống";
    const error_email_already_exist = "Email đã tồn tại trên hệ thống";
    const send_sms_success = "Mã xác nhận đã được gửi đến số điện thoại của bạn!";
    const send_sms_error = "Hệ thống đang bảo trì!";
    const check_code_verify_error = "Mã xác nhận không hợp lệ!";
    const check_code_verify_success = "Mã xác nhận hợp lệ!";
    const create_new_password_success = "Tạo mật khẩu mới thành công!";
    const register_email_success = "Đăng ký nhận thông báo thành công!";
    const user_links_facebook_already_exist = "Tài khoản của bạn đã liên kết với facebook";
    const account_links_facebook_already_exist = "Tài khoản facebook này đã tồn tại trên hệ thống";
    const user_links_google_already_exist = "Tài khoản của bạn đã liên kết với google";
    const account_links_google_already_exist = "Tài khoản google này đã tồn tại trên hệ thống";
    const account_links_success = "Liên kết tài khoản thành công";
    const access_token_not_found = "Không tìm thấy access token của bạn";
    const error_setting_period_not_found = "Không tìm thấy kỳ hạn vay vốn";
    const type_post_introduce = 1;
    const type_post_question = 2;
    const type_post_contact = 3;
    const error_post_not_found = "Không tìm thấy bài viết";
    const ip_address_not_found = "Không tìm thấy địa chỉ IP!";
    const check_code_introduce_not_found = "Không tìm thấy số điện thoại giới thiệu này!";
    const error_borrower_cmtnd_and_phone_not_finish = "Số điện thoại hoặc chứng minh thư nhân nhân bạn đăng ký đã được sử dụng vay vốn và chưa hoàn thành lần vay vốn trước đó!";
    const register_guarantee_fail = "Bạn cần hoàn thành tối thiểu 1 lần vay vốn để đăng ký làm người bảo lãnh";
    const check_confirm_register_success = "Xác nhận thành công";
    const token_confirm_register_not_found = "Không tìm thấy mã xác nhận người đăng ký";
    const token_confirm_register_invaild = "Mã xác nhận đã hết hạn";
    const check_ip_address_already_exist = "Máy của bạn đã đăng ký nhập mã giới thiệu trước đó rồi!";
    const phone_not_found = "Số điện thoại không tồn tại!";
    const type_user_chat = 20;
    const make_room_chat_success = "Tạo phòng chat thành công";
    const not_role_update_room = "Bạn không có quyền đổi tên phòng chat này";
    const room_chat_not_found = "Không tìm thấy phòng chat";
    const not_role_view_room = "Bạn không có quyền xem phòng chat";
    const error_id_category_not_found = "Không tìm thấy danh mục";
    const error_id_image_not_found = "Không tìm thấy ảnh";
    const customer_new_not_found = "Không tìm thấy tin tức khách hàng";
    const endow_new_not_found = "Không tìm thấy tin tức ưu đãi";
    const promotion_new_not_found = "Không tìm thấy tin tức khuyến mãi";
    const error_number_cmtnd_already_exist = "Số chứng minh thư đã tồn tại";
    const check_user_rank_credit_not_found = "Bạn chưa được quyền vay vốn";
    const check_loan_not_found = "Không tìm thấy lần vay vốn phù hợp";
    const check_money_investment_loan_error = "Số tiền đầu tư không được vượt quá số tiền còn lại của lần vay vốn";
    const status_loan_pending = 0;
    const status_loan_approved = 1;
    const status_loan_disbursed = 2;
    const status_loan_finish = 3;
    const status_loan_fail = 4;
    const create_investment_success = "Đầu tư thành công";
    const check_money_user_investment_error = "Số tiền của bạn không đủ để đầu tư khoản vay này";
    const status_invested = 0;
    const status_invest_disbursed = 1;
    const check_money_loan_error = "Số tiền vay vốn phải là bội của 500.000 VND";
    const check_money_investment_loan_invaild = "Số tiền đầu tư phải là bội của 500.000 VND";
    const error_id_work_address_not_found = "Không tìm thấy địa chỉ";
    const error_id_recruitment_position_not_found = "Không tìm thấy chức vụ";
    const error_id_recruitment_department_not_found = "Không tìm thấy bộ phận";
    const error_id_recruitment_not_found = "Không tìm thấy lần tuyển dụng";
    const change_investment_success = "Chuyển nhượng đầu tư thành công";
    const type_change_investment_success_with_user = 4;
    const type_change_investment_success = 3;
    const type_change_investment = 2;
    const type_investment = 1;
    const check_list_loan_with_rank_not_found = "Không tìm thấy lần vay vốn nào phù hợp với hạng mục này";
    const check_change_investment_loan_not_found = "Không tìm thấy lần chuyển nhượng đầu tư";
    const check_money_change_investment_loan_error = "Số tiền chuyển nhượng đầu tư không được vượt quá số tiền còn lại của lần đầu tư này";
    const error_id_rank_credit_not_found = "Không tìm thấy hạng tín dụng";
    const type_confirm_loan = 1;
    const error_loan_product_not_found = "Gói sản phẩm vay không tồn tại";
    const lock_success = "Khóa thành công";
    const unlock_success = "Mở khóa thành công";
    const message_login_user_recruit_not_found = "Không tìm thấy tài khoản trên hệ thống";
    const apply_success = "Ứng tuyển thành công";
    const recruitment_not_found = "Không tìm thấy bài viết tuyển dụng";
    const error_id_loan_product_packet_not_found = "Không tìm thấy gói sản phẩm vay";
    const error_period_loan = "Thời hạn vay vốn không hợp lệ";
    const error_money_loan = "Số tiền vay vốn không được cho phép";
    const error_period_loan_1 = "Gói sản phẩm này chỉ cho phép vay trong vòng 1 ngày";
    const error_period_loan_2 = "Gói sản phẩm này chỉ cho phép vay trong vòng 1 - 30 ngày";
    const error_period_loan_3 = "Gói sản phẩm này chỉ cho phép vay trong vòng 1 - 24 tháng";
    const error_period_loan_4 = "Gói sản phẩm này chỉ cho phép vay trong vòng 1 - 24 tháng";
    const error_period_loan_5 = "Gói sản phẩm này chỉ cho phép vay trong vòng 1 - 24 tháng";
    const loan_detail_not_found = "Không tìm thấy lần giải ngân";
    const check_loan_user_duplicate = "Bạn không thể đầu tư vào chính lần vay vốn của mình";
    const error_id_investment_holding_not_found = "Không tìm thấy bài viết đầu tư holdings";
    const error_id_benefit_investment_holding_not_found = "Không tìm thấy bài viết lợi ích sản phẩm đầu tư holdings";
    const error_id_Condition_investment_holding_not_found = "Không tìm thấy bài viết điều kiện sản phẩm đầu tư holdings";
    const error_id_Feature_investment_holding_not_found = "Không tìm thấy bài viết tính năng sản phẩm đầu tư holdings";
    const error_id_InterestRate_investment_holding_not_found = "Không tìm thấy lãi suất đầu tư holdings";
    const type_interest_rate_day = 1;
    const type_interest_rate_month = 2;
    const lock_account_success = "Khóa tài khoản thành công";
    const unlock_account_success = "Mở khóa tài khoản thành công";
    const error_id_interest_rate_investment_holding_not_found = "Không tìm thấy kỳ hạn đầu tư holdings phù hợp";
    const error_id_from_period_bigger_to_period = "Thời hạn bắt đầu không thể lớn hơn thời hạn kết thúc";
    const error_id_to_period_bigger_period_in_check_interest_rate = "Thời hạn kết thúc phải nhỏ hơn thời hạn cha";
    const error_id_type_different_in_check_interest_rate = "Loại thời hạn không khớp với thời hạn cha";
    const send_otp_create_user_investment_holding_success = "Gửi mã otp thành công, vui lòng kiểm tra điện thoại để xác nhận";
    const check_code_verify_expired_error = "Mã xác nhận đã hết hạn";
    const error_check_user_investment_holding_id_not_found = "Không tìm thấy lần đầu tư holdings";
    const check_money_user_investment_holdings_error = "Bạn không đủ tiền để đầu tư holdings";
    const investment_finalization_success = "Tất toán thành công";
    const transfer_fee_not_found = "Không tìm thấy phí chuyển nhượng";
    const fee_not_found = "Không tìm thấy phí đầu tư";
    const check_money_transfer_invaild = "Số tiền chuyển nhượng phải là bội của 500.000 VND";
    const check_fee_invaild = "Số dư của bạn không đủ để trả phí";
    const check_money_transfer_investment_invaild = "Số tiền bạn cần chuyển vượt quá số tiền còn lại của lần đầu tư của bạn";
    const status_loan_detail_wait_investment = 0; // chờ đầu tư
    const status_loan_detail_not_due = 1; // đã đầu tư, chưa đến hạn trả nợ
    const status_loan_detail_due_date = 2; // đã đến hạn trả nợ
    const status_loan_detail_settlement_on_time = 3; // trả đúng hạn
    const status_loan_detail_Late_repayment = 4; //Chậm trả nợ
    const status_loan_detail_late_settlement = 5; // trả chậm
    const send_otp_create_user_investment_holding_error = "Đã có lỗi xảy ra";
    const check_money_user_error = "Số tiền của bạn không đủ để thực hiện giao dịch";
    const payment_loan_success = "Giao dịch thành công";
    const payment_loan_error = "Bạn cần hoàn thành thanh toán lần quyết toán trước đó";
    const check_money_settlement_error = "Số tiền không được vượt quá số tiền gốc còn lại";
    const premature_settlement_success = "Tất toán vay vốn thành công";
    const user_not_role_register = "Bạn không có quyền đăng ký thành viên mới";
    const register_new_member_success = "Đăng ký thành viên mới thành công";
    const error_id_SettingAgencyTitle_not_found = "Không tìm thấy danh hiệu đại lý";
    const down_rank_agency_success = "Hạ cấp đại lý thành công";
    const user_not_agency = "Bạn không phải đại lý!";
    const check_money_loan_packet_error = "Số tiền phải chia hết cho 500.000VNĐ!";
    const check_money_month_first_inloandetail_error = "Số tiền tất toán không được nhỏ hơn số tiền quyết toán hàng tháng";
    const recharge_account_success = "Nạp tiền vào tài khoản thành công";
    const check_TransferInvestment_user_duplicate = "Bạn không được đầu tư vào chính lần chuyển nhượng của bạn";
    const type_plus_money = 1;
    const type_minus_money = 2;
    const type_cancel = 0; // Về trang chủ
    const type_order_code = 1; // Giới thiệu
    const type_loan_code = 2; //Vay vốn
    const type_fast_loan_code = 3; //Vay vốn nhanh
    const type_investment_code = 4; //Đầu tư
    const type_TransferInvestment_code = 5; //Chuyển nhượng
    const type_investment_holdings_code = 6; //Holdings
    const type_user_code = 7; //User
    const type_agency_code = 8; // đại lý
    const type_recruitment_code = 9; //Tuyển dụng
    const upload_image_infomation_success = "Xác thực thông tin thành công";
    const message_login_user_error_password = "Mật khẩu không chính xác";
    const error_not_role = "Bạn không có quyền sử dụng chức năng này";
    const error_id_category_food_not_found = "Không tìm thấy danh mục món ăn";
    const error_id_combo_food_not_found = "Không tìm thấy combo món ăn này";
    const error_id_shipper_not_found = "Không tìm thấy shipper";
    const error_id_store_not_found = "Không tìm thấy cửa hàng";
    const error_id_food_not_found = "Không tìm thấy món ăn";
    const error_id_size_not_found = "Không tìm thấy kích cỡ món ăn";
    const error_topping_food_id_not_found = "Không tìm thấy topping món ăn";
    const error_number_table_duplicate = "Số bàn đã tồn tại";
    const update_size_food_error = "Vui lòng gửi đúng định dạng";
    const add_card_food_success = "Thêm giỏ hàng thành công";
    const choose_store_success = "Chọn cửa hàng thành công";
    const error_user_store_duplicate = "Bạn chỉ được phép chọn 1 cửa hàng";
    const error_user_store_not_found = "Không tìm thấy cửa hàng mà bạn đã chọn";
    const confirm_store_success = "Xác nhận cửa hàng thành công";
    const error_check_store_with_owner_not_found = "Không tìm thấy cửa hàng mà bạn làm chủ";
    const error_check_staff_not_found = "Không tìm thấy nhân viên";
    const error_check_card_food_not_found = "Không tìm thấy sản phẩm nào trong giỏ hàng cửa cửa hàng này";
    const order_success = "Đặt hàng thành công";
    const order_food_success = "Gọi món thành công";
    const error_user_store_status_0 = "Bạn chưa được chủ cửa hàng xác nhận làm nhân viên của cửa hàng này";
    const error_user_store_status_2 = "Tài khoản của bạn tạm thời bị chủ cửa hàng tạm dừng tài khoản";
    const error_id_combo_food_quantity = "Xin lỗi! Số lượng combo không còn đủ để bạn đặt hàng";
    const choose_shipper_success = "Chọn shipper thành công";
    const error_shipper_store_confirm_not_found = "Không tìm thấy cửa hàng bạn cần xác nhận";
    const error_shipper_store_cancel_not_found = "Không tìm thấy cửa hàng bạn cần hủy";
    //đơn online
    const status_order_wait_update = 0; // chờ cập nhật lên trang danh sách đơn hàng của cửa hàng
    const status_order_wait_confirm = 1; // chờ cửa hàng xác nhận
    const status_order_confirmed = 2; // đã xác nhận và chuyển về cho shipper
    const status_order_received_shipper = 3; // shipper đã nhận hàng
    const status_order_finish = 4; // Hoàn thành đơn hàng
    const status_order_store_cancel = 5; // Cửa hàng hủy
    const status_order_customer_cancel = 6; // Khách hảng hủy
    const status_order_time_out_with_store = 7; // Hết hạn xác nhận đối với cửa hàng
    const status_order_confirmed_shipper = 8; //shipper xác nhận nhận hàng
    const status_order_has_arrived_store_shipper = 9; // shipper đã đến cửa hàng
    const status_order_shipper_cancel = 10; // shipper hủy đơn
    const status_order_has_arrived_customer_shipper = 11; // Shipper đã đến địa điểm giao
    const status_order_time_out_with_shipper = 12; // thời gian xác nhận đơn hết hạn đối với shipper
    const status_order_time_out_with_24h = 13; // thời gian đơn hàng quá 24h
    const status_order_cancel_with_admin = 14; // admin hủy
    //đon hàng giao hộ
    const status_order_user_product_pending = 0;// chờ shipper xác nhận
    const status_order_user_product_confirmed_shipper = 1;// shipper đã xác nhận đơn
    const status_order_user_product_arrived_sender_shipper = 2;// shipper đã đến chỗ ngời gửi
    const status_order_user_product_received_shipper = 3;// shipper đã lấy hàng
    const status_order_user_product_arrived_receiver_shipper = 4; // shipper đã đến chỗ người nhận
    const status_order_user_product_finish = 5; // đơn hàng giao hộ đã hoàn thành
    const status_order_user_product_sender_cancel = 6; // người gửi hủy
    const status_order_user_product_shipper_cancel = 7; // shipper hủy
    const status_order_user_product_receiver_cancel = 8; // người nhận hủy
    const status_order_user_product_time_out_shipper = 9; // không có shipper nhận hàng
    const status_order_user_product_timzi_cancel = 10; // Timzi hủy
    const receive_order_success = "Nhận đơn thành công";
    const order_not_found = "Không tìm thấy đơn hàng.";
    const confirm_shipper_received_success = "Xác nhận người giao hàng lấy hàng thành công";
    const evaluate_success = "Đánh giá thành công";
    const error_table_store_not_empty = "Bàn này đã hết chỗ, vui lòng bạn chọn bàn khác";
    const booking_success = "Đặt bàn thành công";
    const open_table_store_success = "Mở bàn thành công";
    const close_table_store_success = "Đóng bàn thành công";
    const error_table_store_number_people = "Số người bạn đặt không hợp lệ";
    const error_table_store_number_people_change = "Bàn bạn chuyển không phù hợp với số người bạn đặt trước đó";
    const status_table_store_empty = 1;
    const status_table_store_booked = 2;
    const status_table_store_wait_confirm = 3;
    const status_booking_table_wait_confirm = 0; //chờ xác nhận
    const status_booking_table_confirmed = 1; // Đã xác nhận
    const status_booking_table_in_service = 2; // Đang phục vụ
    const status_booking_table_has_served = 3; // Đã phục vụ
    const status_booking_table_cancel_with_store = 4; // Đã hủy từ cửa hàng
    const status_booking_table_cancel_with_customer = 6; // Đã huy từ khách hàng
    const status_booking_table_time_out_with_customer = 7; // thời gian đặt bàn hết hạn
    const status_booking_table_wait_payment = 5; // chờ thành toán
    const status_booking_food_wait_submit = 1; // chưa gọi
    const status_booking_food_not_on_the_table_yet = 2; // chờ lên bàn
    const status_booking_food_was_on_the_table = 3; // đã lên bàn
    const status_booking_food_finish = 4; // đã hoàn thành
    const error_book_table_not_found = "Bạn chưa đặt bàn trước đó, vui lòng đặt bàn để thực hiện chức năng này!";
    const add_book_food_success = "Thêm món thành công";
    const change_success = "Đổi thành công";
    const error_right_to_order_with_customer = "Bạn chưa có quyền đặt hàng";
    const error_check_book_food_not_found = "Không tìm thấy lần đặt món của bạn";
    const error_check_book_table_already_exist = "Bạn đã đặt bàn trước đó";
    const error_not_confirm_book_table = "Lần đặt bàn của bạn chưa được xét duyệt";
    const request_payment_success = "Yêu cầu thanh toán thành công";
    const confirm_payment_success = "Xác nhận thanh toán thành công";
    const error_coin_user_not_enough = "Số xu của bạn không đủ";
    const error_check_payment_method_not_found = "Không tìm thấy phương thức thanh toán";
    const error_check_book_status = "Bạn không thể đổi bàn";
    const error_check_voucher_user_duplicate = "Bạn đã lấy voucher này trước đó";
    const receive_success = "Nhận thành công";
    const error_id_voucher_not_found = "Không tìm thấy voucher";
    const error_id_program_system_not_found = "Không tìm thấy chương trình";
    const stop_program_success = "Dừng tham gia chương trình thành công";
    const call_staff_success = "Gọi nhân viên thành công";
    const error_coin_user = "Số xu của bạn không đủ để thực hiện đặt hàng";
    const error_order_food_with_shipper_not_finish = "Bạn chưa hoàn thành đơn hàng trước đó";
    const error_check_revenue_wait_payment = "Chưa đến hạn đóng phí chiết khấu";
    const error_latitude_and_longtidue = "Vui lòng chọn lại kinh độ và vĩ độ";
    const booking_success_wait_confirm = "Đặt bàn thành công, vui lòng chờ cửa hàng xác nhận.";
    const error_check_out_of_stock_voucher = "Voucher này hiện số lượng đã hết.";
    const error_array_table_store = "Bàn muốn gộp phải là dạng mảng.";
    const table_merge_success = "Gộp bàn thành công.";
    const push_notify_success = "Thông báo thành công";
    const push_notify_transfer_success = "Tạo thông báo thành công! Vui lòng chờ Timzi xét duyệt.";
    const error_manage_province = "Vui lòng chọn khu vực quản lý";
    const error_quantity_book_food = "Số lượng không hợp lệ";
    const return_food_success = "Hoàn trả thành công";
    const error_quantity_food_not_found = "Vui lòng nhập số lượng";
    const reset_password_success = "Reset mật khẩu thành công! mật khẩu mới sau khi reset là timzi123";
    const error_time_order = "Thời gian đặt hàng không phù hợp với thời gian mở cửa của quán! Vui lòng chọn lại thời gian.";
    const error_time_book_table = "Thời gian đặt bàn không phù hợp với thời gian mở cửa của quán! Vui lòng chọn lại thời gian.";
    const lock_store_success = "Khóa cửa hàng thành công";
    const unlock_store_success = "Mở khóa cửa hàng thành công";
    const error_type_food_not_found = "Không tìm thấy kiểu món ăn";
    const error_check_staff_user_id = "Bạn đã làm chủ cửa hàng này trước đó.";
    const error_check_staff_already_exist = "Cửa hàng này đã có chủ cửa hàng.";
    const error_check_staff_user_not_found = "Bạn không phải chủ cửa hàng này.";
    const recharge_success = "Yêu cầu nạp tiền thành công";
    const error_voucher_proviso_invalid = "Đơn hàng không đủ điều kiện để dùng voucher.";
    const message_account_no_confirm = "Tài khoản của bạn chưa được duyệt, vui lòng chờ hệ thống duyệt thông tin.";
    const error_store_not_open = "Cửa hàng hiện đang đóng, vui lòng đặt hàng vào ngày khác.";
    const export_success = "Xuất file báo cáo thành công.";
    const error_book_table_check_not_found = "Không tìm thấy lần đặt bàn của bạn.";
    const error_food_status = "Món ăn tạm hết, vui lòng bạn chọn món khác.";
    const error_check_order_user_product_exists = "Đơn hàng giao hộ của bạn trước đó vẫn chưa hoàn thành.";
    const error_id_supplier_not_found = "Không tìm thấy nhà cung cấp.";
    const error_id_TypeMaterial_not_found = "Không tìm thấy loại vật tư.";
    const error_id_Material_not_found = "Không tìm thấy vật tư.";
    const error_id_notify_not_found = "Không tìm thấy thông báo.";
    const type_store = 1;
    const type_order = 2;
    const type_book_table = 3;
    const type_revenue_store = 4;
    const type_order_with_shipper = 5;
    const type_money_shipper = 6;
    const type_all_user = 7;
    const type_all_user_with_new_store = 8;
    const type_order_with_store = 9;
    const type_call_staff_book_table = 10;
    const type_order_user_product_with_shipper = 11;
}
