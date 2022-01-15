<template>
  <div class="card">
    <div class="card-header d-block">
      {{ $t("Frontend") }}
      <button
        class="btn btn-link btn-sm float-right"
        type="button"
        data-toggle="collapse"
        data-target="#customizer-frontend"
        aria-expanded="false"
        aria-controls="customizer-frontend"
      >
        <i class="fas collapse-icon"></i>
      </button>
    </div>
    <div class="collapse multi-collapse show" id="customizer-frontend">
      <div class="card-body p-3 clearfix">
        <div class="row">
          <div class="col-12 mb-2">
            <div class="form-label-group m-0">
              <colorpicker
                v-model="fields.frontend_main_bg_color"
                menuPosition="center"
                class="d-inline"
                ><div
                  class="border border-gray rounded bg-white"
                  width="24"
                  height="24"
                >
                  <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                </div>
              </colorpicker>
              {{ $t("Frontend main color") }}
            </div>
          </div>

          <div class="col-12 mb-2">
            <div class="form-label-group m-0">
              <colorpicker
                v-model="fields.header_bg_color"
                menuPosition="center"
                class="d-inline"
                ><div
                  class="border border-gray rounded bg-white"
                  width="24"
                  height="24"
                >
                  <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                </div>
              </colorpicker>
              {{ $t("Header Background color") }}
            </div>
          </div>

          <fieldset class="m-1 w-100">
            <legend>{{ $t("Hero section") }}:</legend>

            <div class="col-12 mb-2">
              <div class="form-label-group m-0">
                <colorpicker
                  v-model="fields.frontend_hero_bg_color"
                  menuPosition="center"
                  class="d-inline"
                  ><div
                    class="border border-gray rounded bg-white"
                    width="24"
                    height="24"
                  >
                    <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                  </div>
                </colorpicker>
                {{ $t("Hero background color") }}
              </div>
            </div>

            <div class="col-12 mb-2">
              <label for="frontend_hero_image">{{
                $t("Hero section image")
              }}</label>

              <div class="input-group mb-1">
                <div
                  class="input-group-prepend"
                  v-if="fields.frontend_hero_image"
                >
                  <span
                    class="input-group-text py-0 px-1"
                    id="frontend_hero_image-g"
                  >
                    <img height="32" :src="fields.frontend_hero_image" />
                  </span>
                </div>
                <div class="custom-file">
                  <input
                    type="file"
                    accept="image/png, image/jpeg"
                    @change="doUpload"
                    data-item="frontend_hero_image"
                    class="custom-file-input"
                    id="frontend_hero_image"
                    aria-describedby="frontend_hero_image-g"
                  />
                  <label class="custom-file-label" for="frontend_hero_image">{{
                    $t("Choose file")
                  }}</label>
                </div>
              </div>

              <div class="progress" v-if="uploading.frontend_hero_image > 0">
                <div
                  class="progress-bar"
                  v-bind:class="{
                    'bg-success': uploading.frontend_hero_image == 100,
                  }"
                  role="progressbar"
                  :style="'width: ' + uploading.frontend_hero_image + '%'"
                  :aria-valuenow="uploading.frontend_hero_image"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  {{ uploading.frontend_hero_image }}
                </div>
              </div>
            </div>

            <div class="col-12 mb-2">
              <label for="frontend_hero_bg_image">{{
                $t("Hero section background image")
              }}</label>
              <div class="input-group mb-1">
                <div
                  class="input-group-prepend"
                  v-if="fields.frontend_hero_bg_image"
                >
                  <span
                    class="input-group-text py-0 px-1"
                    id="frontend_hero_bg_image-g"
                  >
                    <img height="32" :src="fields.frontend_hero_bg_image" />
                  </span>
                </div>
                <div class="custom-file">
                  <input
                    type="file"
                    accept="image/png, image/jpeg"
                    @change="doUpload"
                    data-item="frontend_hero_bg_image"
                    class="custom-file-input"
                    id="frontend_hero_bg_image"
                    aria-describedby="frontend_hero_bg_image-g"
                  />
                  <label
                    class="custom-file-label"
                    for="frontend_hero_bg_image"
                    >{{ $t("Choose file") }}</label
                  >
                </div>
              </div>
              <div class="progress" v-if="uploading.frontend_hero_bg_image">
                <div
                  class="progress-bar"
                  v-bind:class="{
                    'bg-success': uploading.frontend_hero_bg_image == 100,
                  }"
                  role="progressbar"
                  :style="'width: ' + uploading.frontend_hero_bg_image + '%'"
                  :aria-valuenow="uploading.frontend_hero_bg_image"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </fieldset>

          <fieldset class="m-1 w-100">
            <legend>{{ $t("Submit ticket button") }}:</legend>
            
            <div class="col-12 border p-2 my-2">
              <div class="row m-2">
                <div class="col-sm-6 col-md-4 mb-2">
                  <div class="form-label-group m-0">
                    <colorpicker
                      v-model="fields.frontend_ticket_btn_bg_color"
                      menuPosition="center"
                      class="d-inline"
                      ><div
                        class="border border-gray rounded bg-white"
                        width="24"
                        height="24"
                      >
                        <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                      </div>
                    </colorpicker>
                    {{ $t("Ticket button background color") }}
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-2">
                  <div class="form-label-group m-0">
                    <colorpicker
                      v-model="fields.frontend_ticket_btn_text_color"
                      menuPosition="center"
                      class="d-inline"
                      ><div
                        class="border border-gray rounded bg-white"
                        width="24"
                        height="24"
                      >
                        <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                      </div>
                    </colorpicker>
                    {{ $t("Ticket button text color") }} 
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-2">
                  <div class="form-label-group m-0">
                    <colorpicker
                      v-model="fields.frontend_ticket_btn_border_color"
                      menuPosition="center"
                      class="d-inline"
                      ><div
                        class="border border-gray rounded bg-white"
                        width="24"
                        height="24"
                      >
                        <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                      </div>
                    </colorpicker>
                    {{ $t("Ticket button border color") }}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 border p-2 my-2">
              <div class="row m-2">
                <div class="col-sm-6 col-md-4 mb-2">
                  <div class="form-label-group m-0">
                    <colorpicker
                      v-model="fields.frontend_ticket_btn_hover_bg_color"
                      menuPosition="center"
                      class="d-inline"
                      ><div
                        class="border border-gray rounded bg-white"
                        width="24"
                        height="24"
                      >
                        <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                      </div>
                    </colorpicker>
                    {{ $t("Ticket button hover background color") }}
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-2">
                  <div class="form-label-group m-0">
                    <colorpicker
                      v-model="fields.frontend_ticket_btn_hover_text_color"
                      menuPosition="center"
                      class="d-inline"
                      ><div
                        class="border border-gray rounded bg-white"
                        width="24"
                        height="24"
                      >
                        <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                      </div>
                    </colorpicker>
                    {{ $t("Ticket button hover text color") }}
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 mb-2">
                  <div class="form-label-group m-0">
                    <colorpicker
                      v-model="fields.frontend_ticket_btn_hover_border_color"
                      menuPosition="center"
                      class="d-inline"
                      ><div
                        class="border border-gray rounded bg-white"
                        width="24"
                        height="24"
                      >
                        <i class="fas fa-paint-brush p-1 rounded-circle"></i>
                      </div>
                    </colorpicker>
                    {{ $t("Ticket button hover border color") }}
                  </div>
                </div>
              </div>
            </div>
          </fieldset>

          <fieldset class="m-1 w-100 pb-2">
            <legend>{{ $t("Authentication") }}:</legend>

            <label for="frontend_auth_bg_image">{{
              $t("Authentication page background image")
            }}</label>
            <div class="input-group mb-1">
              <div
                class="input-group-prepend"
                v-if="fields.frontend_auth_bg_image"
              >
                <span class="input-group-text py-0 px-1" id="auth-bg-image-g">
                  <img height="32" :src="fields.frontend_auth_bg_image" />
                </span>
              </div>
              <div class="custom-file">
                <input
                  type="file"
                  accept="image/png, image/jpeg"
                  @change="doUpload"
                  data-item="frontend_auth_bg_image"
                  class="custom-file-input"
                  id="frontend_auth_bg_image"
                  aria-describedby="auth-bg-image-g"
                />
                <label class="custom-file-label" for="frontend_auth_bg_image">{{
                  $t("Choose file")
                }}</label>
              </div>
            </div>
            <div class="progress" v-if="uploading.frontend_auth_bg_image">
              <div
                class="progress-bar"
                v-bind:class="{
                  'bg-success': uploading.frontend_auth_bg_image == 100,
                }"
                role="progressbar"
                :style="'width: ' + uploading.frontend_auth_bg_image + '%'"
                :aria-valuenow="uploading.frontend_auth_bg_image"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
          </fieldset>
        </div>

        <div class="card-footer d-block clearfix mt-2">
          <save-btn
            class="btn btn-primary float-right"
            :inAction="isSaving"
            v-on:click.native="save"
          ></save-btn>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ErrorManager from "./ErrorManager";
import colorpicker from "verte";
import "verte/dist/verte.css";
import axios from "axios";

export default {
  data() {
    return {
      isLoading: false,
      errors: new ErrorManager(),
      uploadProgress: 0,
      isSaving: false,
      uploading: {
        frontend_hero_image: 0,
        frontend_hero_bg_image: 0,
        frontend_auth_bg_image: 0,
      },
      fields: {
        frontend_main_bg_color: "",

        frontend_hero_bg_color: "#3f3d56db",
        frontend_hero_bg_image: "",
        frontend_hero_image: "",

        header_bg_color: "#000",

        // Ticket Button colors
        frontend_ticket_btn_text_color: "",
        frontend_ticket_btn_border_color: "",
        frontend_ticket_btn_bg_color: "",
        frontend_ticket_btn_hover_text_color: "",
        frontend_ticket_btn_hover_border_color: "",
        frontend_ticket_btn_hover_bg_color: "",

        frontend_auth_bg_image: "",
      },
    };
  },
  beforeMount(){
    this.fetch()
  },
  components: {
    colorpicker,
  },
  methods: {
    async doUpload(event) {
      var formData = new FormData();
      var field = event.target;

      formData.append("file", field.files[0]);
      formData.append("type", "setting");

      this.uploading[field.getAttribute("data-item")] = 1;

      const config = {
        headers: { "Content-Type": "multipart/form-data" },
        onUploadProgress: (progressEvent) => {
          var percentCompleted = Math.round(
            (progressEvent.loaded * 100) / progressEvent.total
          );
          this.uploading[field.getAttribute("data-item")] = percentCompleted;
        },
      };

      var vm = this;
      await axios
        .post(this.$myaccount_url + "upload", formData, config)
        .then((response) => {
          if (!response) {
            this.$toasted.global.error(
              this.$t("An error occured please try again")
            );
            return;
          }

          if (response.data.status == "ok") {
            this.fields[field.getAttribute("data-item")] = response.data.url;
          } else {
            if (typeof response.data.message == "string") {
              this.errorDetails = response.data.message;
              this.$toasted.global.error(response.data.message);
            } else {
              vm.$toasted.global.error(
                Object.keys(response.data.messages)
                  .map(function (k) {
                    return response.data.messages[k];
                  })
                  .join(",")
              );
            }
          }
        })
        .catch(function (error) {
          vm.$toasted.global.error(error);
        })
        .then(function () {
          vm.uploading[field.getAttribute("data-item")] = 0;
        });
    },
    save() {
      var vm = this;
      vm.isSaving = true;
      axios
        .post(vm.$myaccount_url + "customizer/save", { fields: vm.fields })
        .then((response) => {
          if (response.data.status == "ok") {
            vm.$toasted.global.success(response.data.message);
          } else {
            if (response.data.message) {
              vm.$toasted.global.error(response.data.message);
            }

            if (response.data.messages) {
              vm.$toasted.global.error(
                Object.keys(response.data.messages)
                  .map(function (k) {
                    return response.data.messages[k];
                  })
                  .join(",")
              );
            }
          }
        })
        .catch(function (error) {
          vm.$toasted.global.error(error);
        })
        .then(function () {
          vm.isSaving = false;
        });
    },
    fetch() {
      axios
        .post(this.$myaccount_url + "customizer/settings")
        .then((response) => {
            this.fields = response.data
        })
        .catch(function (error) {
          this.$toasted.global.error(error);
        })
    },

  },
};
</script>
