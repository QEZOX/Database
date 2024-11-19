CREATE TABLE "Users"(
    "User Name" NVARCHAR(255) NOT NULL,
    "Account ID" INT NOT NULL,
    "Password Hash" NVARCHAR(255) NOT NULL,
    "User ID" INT NOT NULL
);
ALTER TABLE
    "Users" ADD CONSTRAINT "users_user id_primary" PRIMARY KEY("User ID");
CREATE TABLE "Transaction Logs"(
    "Details" NVARCHAR(255) NOT NULL,
    "Log Date" DATETIME NOT NULL,
    "Transaction ID" INT NOT NULL,
    "Log ID" INT NOT NULL
);
ALTER TABLE
    "Transaction Logs" ADD CONSTRAINT "transaction logs_log id_primary" PRIMARY KEY("Log ID");
CREATE TABLE "Accounts"(
    "Account Number" VARCHAR(255) NOT NULL,
    "Account ID" INT NOT NULL,
    "Account Holder bigintName" NVARCHAR(255) NOT NULL,
    "Balance" DECIMAL(8, 2) NOT NULL
);
ALTER TABLE
    "Accounts" ADD CONSTRAINT "accounts_account id_primary" PRIMARY KEY("Account ID");
CREATE TABLE "Failed Attempts"(
    "Attempt ID" INT NOT NULL,
    "Attempt Type" NVARCHAR(255) NOT NULL,
    "Card ID" INT NOT NULL,
    "Attempt Date" DATETIME NOT NULL
);
ALTER TABLE
    "Failed Attempts" ADD CONSTRAINT "failed attempts_attempt id_primary" PRIMARY KEY("Attempt ID");
CREATE TABLE "Blocked Cards"(
    "Block Reason" NVARCHAR(255) NOT NULL,
    "Card ID" INT NOT NULL,
    "Block ID" INT NOT NULL,
    "BlockDate" DATETIME NOT NULL
);
ALTER TABLE
    "Blocked Cards" ADD CONSTRAINT "blocked cards_block id_primary" PRIMARY KEY("Block ID");
CREATE TABLE "Transactions"(
    "Card ID" INT NOT NULL,
    "ATM ID" INT NOT NULL,
    "Transaction ID" INT NOT NULL,
    "Amount" DECIMAL(8, 2) NOT NULL,
    "Transaction Type" VARCHAR(255) NOT NULL
);
ALTER TABLE
    "Transactions" ADD CONSTRAINT "transactions_transaction id_primary" PRIMARY KEY("Transaction ID");
CREATE TABLE "ATMs"(
    "Bank Name" NVARCHAR(255) NOT NULL,
    "ATM ID" INT NOT NULL,
    "Location" NVARCHAR(255) NOT NULL
);
ALTER TABLE
    "ATMs" ADD CONSTRAINT "atms_atm id_primary" PRIMARY KEY("ATM ID");
CREATE TABLE "Cards"(
    "Expiry Date" DATE NOT NULL,
    "Card Number" VARCHAR(255) NOT NULL,
    "Card ID" INT NOT NULL,
    "Card Type" VARCHAR(255) NOT NULL,
    "Account ID" INT NOT NULL
);
ALTER TABLE
    "Cards" ADD CONSTRAINT "cards_card id_primary" PRIMARY KEY("Card ID");
CREATE TABLE "Daily Limits"(
    "Account ID" INT NOT NULL,
    "Daily Limit" DECIMAL(8, 2) NOT NULL
);
ALTER TABLE
    "Daily Limits" ADD CONSTRAINT "daily limits_account id_primary" PRIMARY KEY("Account ID");
ALTER TABLE
    "Users" ADD CONSTRAINT "users_account id_foreign" FOREIGN KEY("Account ID") REFERENCES "Accounts"("Account ID");
ALTER TABLE
    "Transaction Logs" ADD CONSTRAINT "transaction logs_transaction id_foreign" FOREIGN KEY("Transaction ID") REFERENCES "Transactions"("Transaction ID");
ALTER TABLE
    "Accounts" ADD CONSTRAINT "accounts_account id_foreign" FOREIGN KEY("Account ID") REFERENCES "Daily Limits"("Account ID");
ALTER TABLE
    "Cards" ADD CONSTRAINT "cards_card id_foreign" FOREIGN KEY("Card ID") REFERENCES "Transactions"("Transaction ID");
ALTER TABLE
    "Cards" ADD CONSTRAINT "cards_account id_foreign" FOREIGN KEY("Account ID") REFERENCES "Accounts"("Account ID");
ALTER TABLE
    "Failed Attempts" ADD CONSTRAINT "failed attempts_card id_foreign" FOREIGN KEY("Card ID") REFERENCES "Cards"("Card ID");
ALTER TABLE
    "Blocked Cards" ADD CONSTRAINT "blocked cards_card id_foreign" FOREIGN KEY("Card ID") REFERENCES "Cards"("Card ID");