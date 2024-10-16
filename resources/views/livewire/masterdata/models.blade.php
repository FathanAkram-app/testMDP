<div style="width: 100%;">
    <div class="card items-container">
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 7.44444C30 11.005 23.5072 13.8889 15.5 13.8889C7.49278 13.8889 1 11.005 1 7.44444C1 3.88389 7.49278 1 15.5 1C23.5072 1 30 3.88389 30 7.44444Z" fill="#2F3349"/>
            <path d="M30 7.44444C30 11.005 23.5072 13.8889 15.5 13.8889C7.49278 13.8889 1 11.005 1 7.44444M30 7.44444C30 3.88389 23.5072 1 15.5 1C7.49278 1 1 3.88389 1 7.44444M30 7.44444V15.5M1 7.44444V15.5M30 15.5C30 19.0606 23.5072 21.9444 15.5 21.9444C7.49278 21.9444 1 19.0606 1 15.5M30 15.5V23.5556C30 27.1161 23.5072 30 15.5 30C7.49278 30 1 27.1161 1 23.5556V15.5" stroke="#2F3349" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        <div class="title">
            Master Data
        </div>

    </div>
    <livewire:model-modal :isOpen="$isModalOpen" />
    <div class="card table-container">
        <table class="table-auto w-full">
            <thead>
                <div style="display: flex">
                    <div class="headertitle">Models</div>

                    <button class="btn-add" wire:click="openModal">
                        <svg style="margin-right: 4px" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.75 15H6.25V8.75H0V6.25H6.25V0H8.75V6.25H15V8.75H8.75V15Z" fill="white"/>
                        </svg>
                        Add New Model
                    </button>

                </div>
            </thead>
            <thead>
                <tr>
                    <th class=" px-4 py-2 ">NO</th>
                    <th class=" px-4 py-2">MODEL NAME</th>
                    <th class=" px-4 py-2">DESCRIPTION</th>
                    <th class=" px-4 py-2">STATUS</th>
                    <th class=" px-4 py-2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" px-4 py-2">nomor</td>
                    <td class=" px-4 py-2">namamodel</td>
                    <td class=" px-4 py-2">desc</td>
                    <td class=" px-4 py-2">status</td>
                    <td class=" px-4 py-2" style="display: flex; align-items:center;">
                        <!-- Add your action buttons here -->
                        <a href="#" style="margin:auto" >
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2H3C2.46957 2 1.96086 2.21071 1.58579 2.58579C1.21071 2.96086 1 3.46957 1 4V18C1 18.5304 1.21071 19.0391 1.58579 19.4142C1.96086 19.7893 2.46957 20 3 20H17C17.5304 20 18.0391 19.7893 18.4142 19.4142C18.7893 19.0391 19 18.5304 19 18V11" stroke="#706E7A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.3751 1.62132C16.7729 1.2235 17.3125 1 17.8751 1C18.4377 1 18.9773 1.2235 19.3751 1.62132C19.7729 2.01914 19.9964 2.55871 19.9964 3.12132C19.9964 3.68393 19.7729 4.2235 19.3751 4.62132L10.3621 13.6353C10.1246 13.8726 9.8313 14.0462 9.50909 14.1403L6.63609 14.9803C6.55005 15.0054 6.45883 15.0069 6.372 14.9847C6.28517 14.9624 6.20592 14.9173 6.14254 14.8539C6.07916 14.7905 6.03398 14.7112 6.01174 14.6244C5.98949 14.5376 5.991 14.4464 6.01609 14.3603L6.85609 11.4873C6.95062 11.1654 7.12463 10.8724 7.36209 10.6353L16.3751 1.62132Z" stroke="#706E7A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </a>
                        <a href="#" style="margin:auto" >
                            <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5.66667H20M8.125 10.3333V17.3333M12.875 10.3333V17.3333M2.1875 5.66667L3.375 19.6667C3.375 20.2855 3.62522 20.879 4.07062 21.3166C4.51602 21.7542 5.12011 22 5.75 22H15.25C15.8799 22 16.484 21.7542 16.9294 21.3166C17.3748 20.879 17.625 20.2855 17.625 19.6667L18.8125 5.66667M6.9375 5.66667V2.16667C6.9375 1.85725 7.06261 1.5605 7.28531 1.34171C7.50801 1.12292 7.81006 1 8.125 1H12.875C13.1899 1 13.492 1.12292 13.7147 1.34171C13.9374 1.5605 14.0625 1.85725 14.0625 2.16667V5.66667" stroke="#706E7A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <style>
        *{
            font-family: "Poppins", sans-serif;
        }
        .items-container {
            margin: 20px;
            display: flex;
            align-items: center;
            padding: 16px;
        }
        .items-container .title {
            font-weight: 700;
            margin-left: 16px;

        }
        .table-container {
            margin: 20px;
            border-radius: 6px
        }
        .table-container th{
            color: #6F6C78;
            background-color: #F5F5F7;

        }
        tr{
           text-align: center
        }
        td{
            font-weight: 200;
            color:#6F6C78;
        }
        .headertitle{
            color: #464252;
            font-size: 25px;
            font-weight: 600;
            padding-left: 16px;
            padding-top: 12px;
            padding-bottom: 14px;

        }
        .btn-add{
            background-color: #7266EE;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            border-radius: 4px;
            margin-left: auto;
            margin-top: 8px;
            margin-bottom: 8px;
            margin-right: 8px;
            padding: 6px;

        }


        .card {
            background-color: #FFFFFF;
            border-radius: 6px;
            width: calc(100% - 40px);
            border: 1px solid rgb(210, 210, 210);

        }
    </style>
</div>
