package com.internousdev.template.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import com.internousdev.template.dto.BuyItemDTO;
import com.internousdev.template.util.DBConnector;

public class BuyItemDAO {

	public BuyItemDTO getBuyItemInfo() {
		DBConnector dbConnector = new DBConnector();
		Connection connection = dbConnector.getConnection();
		BuyItemDTO buyItemDTO = new BuyItemDTO();

		String sql = "SELECT id,item_name,item_price FROM item_info_transaction";
		try {
			PreparedStatement preparedStatement = connection.prepareStatement(sql);
			ResultSet resultset = preparedStatement.executeQuery();

			if (resultset.next()) {
				buyItemDTO.setId(resultset.getInt("id"));
				buyItemDTO.setItemName(resultset.getString("item_name"));
				buyItemDTO.setItemPrice(resultset.getString("item_price"));
			}
		} catch (Exception e) {
			e.printStackTrace();
		}

		return buyItemDTO;
	}

}
