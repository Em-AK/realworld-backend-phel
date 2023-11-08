-- CreateTable
CREATE TABLE "tags" (
    "id" INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    "label" TEXT NOT NULL
);

-- CreateIndex
CREATE UNIQUE INDEX "tags_label_key" ON "tags"("label");
