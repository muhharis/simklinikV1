<div class="row">
                  <div class="col-lg-12">

                      <section class="panel">

                          <header class="panel-heading"><a href="<?php echo base_url(); ?>satuanbarang" class="icon-mail-reply"></a>
                              Ubah Data Satuan Barang atau Obat
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                  <form class="cmxform form-horizontal tasi-form" action="<?php echo base_url(); ?>satuanbarang/simpan" method="POST">
                                      <div class="form-group ">
                                          <label for="satuan_id" class="control-label col-lg-2">Kode Satuan Barang atau Obat</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="satuan_id" name="satuan_id" minlength="2" type="text" value="<?php echo $satuan_id; ?>" required readonly="readonly" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="satuan" class="control-label col-lg-2">Nama Satuan Barang atau Obat</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="satuan" name="satuan" value="<?php echo $satuan; ?>" minlength="2" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nm_kel" class="control-label col-lg-2">Status Satuan Barang atau Obat</label>
                                          <div class="col-lg-10">
                                            <select id="is_aktif" name="is_aktif" class="form-control input-sm m-bot15">
                                              <option value="Aktif">Aktif</option>
                                              <option value="Tidak Aktif">Tidak Aktif</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit" title="Simpan">Simpan</button>
                                              <button class="btn btn-default" type="reset" title="Ulang">Ulang</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>

              