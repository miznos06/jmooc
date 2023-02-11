delete from stockList;

delete from stockUser;

delete from stockLog;

select stockList.stock_id, stock_name, amount, type, sum(in_out_n)as sum_n, remarks from stockLog, stockList where stockLog.stock_id = stockList.stock_id group by stock_id;

insert into stockUser (user_number, user_name, user_password,enable)
values ("A12", "弁財天子", "222",1 );

insert into stockList (stock_name, amount, type, remarks)
values ("ドライイースト", "1kg", 3, "予備発酵なし");

insert into stockList (stock_name, amount, type, remarks)
values ("強力粉", "25kg", 1, "食パン・バターロール");

insert into stockList (stock_name, amount, type, remarks)
values ("薄力粉", "25kg", 1, "メロンパンの外生地");

insert into stockList (stock_name, amount, type, remarks)
values ("米粉", "25kg", 1, "国産");


insert into stockLog (stock_id, user_id, in_out_n, update_date)
values (4, 2, 10, "2019-04-01 10:00:00");

insert into stockLog (stock_id, user_id, in_out_n, update_date)
values (5, 2, 5, "2019-04-01 10:00:00");

insert into stockLog (stock_id, user_id, in_out_n, update_date)
values (6, 2, 7, "2019-04-01 10:00:00");

insert into stockLog (stock_id, user_id, in_out_n, update_date)
values (4, 2, -3, "2019-04-01 10:015:00");

insert into stockLog (stock_id, user_id, in_out_n, update_date)
values (5, 2, -2, "2019-04-01 10:015:00");

insert into stockLog (stock_id, user_id, in_out_n, update_date)
values (5, 1, 10, "2019-04-01 10:20:00");

insert into stockLog (stock_id, user_id, in_out_n, update_date)
values (6, 1, -5, "2019-04-01 10:25:00");



